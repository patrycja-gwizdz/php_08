{extends file="main.tpl"}

{block name=content}
    
<div class="major">
	<a href="{$conf->action_url}logout"  class="button primary small">wyloguj</a>
	<span style="float:right;">Użytkownik: {$user->login}, Rola: {$user->role}</span>
</div>
	<!-- First Section -->
	<section id="first" class="main special">

	<div>
         
	<form action="{$conf->action_root}calcCompute" method="post">
		<label for="kwota">Kwota: </label>
		<input id="kwota" type="text" name="kwota" value="{$form->kwota}" />
		<br />
		<label for="lata">Liczba lat: </label>
		<input id="lata" type="text" name="lata"  value="{$form->lata}"  />
		<br />
		<label for="oprocentowanie">Oprocentowanie: </label>
		<input id="oprocentowanie" type="text" name="oprocentowanie"  value="{$form->oprocentowanie}"   />
		<br />
		<br />
		<input type="submit" value="Oblicz" />
	</form>	
	</div>
							</section>

    <section id="cta" class="main  ">
        
        <div class="l-box-lrg pure-u-1 pure-u-med-3-5">


{include file='messages.tpl'}

        {if isset($res->result)}
        <div class="messages inf">
                Miesięczna rata: {$res->result} złotych
        </div>
        {/if}
    </div>
</section>
{/block}







