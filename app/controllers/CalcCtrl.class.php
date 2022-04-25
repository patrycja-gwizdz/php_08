<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

	private $form;   
	private $result; 

	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
		$this->form->lata = getFromRequest('lata');
		$this->form->oprocentowanie = getFromRequest('oprocentowanie');
	}
	
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->lata ) && isset ( $this->form->oprocentowanie ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota == "") {
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->lata == "") {
			getMessages()->addError('Nie podano liczby lat');
		}
		if ($this->form->oprocentowanie == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			
			if (! is_numeric ( $this->form->kwota )) {
				getMessages()->addError('Kwota musi być liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->lata )) {
				getMessages()->addError('Liczba lat musi być liczbą całkowitą');
			}
			if (! is_numeric ( $this->form->oprocentowanie )) {
				getMessages()->addError('Oprocentowanie musi być liczbą całkowitą');
			}
			
			if   ($this->form->kwota<=0){
				getMessages()->addError('Kwota nie może wynosić zero');
			}
                        if   ($this->form->lata<=0){
                                getMessages()->addError('Liczba lat nie może wynosić zero');
                                                }
			if  ($this->form->oprocentowanie<=0) {
				getMessages()->addError('Oprocentowanie nie może wynosić zero');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
		public function action_calcCompute(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->kwota = intval($this->form->kwota);
			$this->form->lata = intval($this->form->lata);
                        $this->form->oprocentowanie = intval($this->form->oprocentowanie);
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			$this->result->result =((($this->form->kwota) / (12 *  $this->form->lata)) * ($this->form->oprocentowanie / 100)) + ($this->form->kwota / (12 *$this->form->lata));
			$this->result->result  = round ($this->result->result, 2);
			getMessages()->addInfo('Wykonano obliczenia.');
                        
                        try{
                            $database = new \Medoo\Medoo([
                            'type' => 'mysql',
                            'host' => 'localhost',
                            'database' => 'kalkulator',
                            'username' => 'root',
                            'password' => '',

                            // [optional]
                            'charset' => 'utf8',
                            'collation' => 'utf8_polish_ci',
                            'port' => 3306,
                            
                            'option' => [
                                   \PDO::ATTR_CASE => \PDO::CASE_NATURAL
                            ],

                            'command' => [
                                    'SET SQL_MODE=ANSI_QUOTES'
                            ]
                    ]);
                            $database->insert("kredyt", [
                            "kwota"  =>$this->form->kwota,
                            "lata" =>$this->form->lata, 
                            "oprocentowanie" =>$this->form->oprocentowanie,
                            "wynik" =>$this->result->result
                                 
                            
                                    
                                    
                           ]);        
                        } catch (\PDOException $ex) {
                            getMessages()->addError("Błąd bazy dancych".$ex ->getMessage());
                        }
                        
		}
		
		$this->generateView();
	}
	
	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
	

       public function generateView(){

		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Kalkulator kredytowy - role');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);

                        getSmarty()->display('calc.tpl');
                }
        }



