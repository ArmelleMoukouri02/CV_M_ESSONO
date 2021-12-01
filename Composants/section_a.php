
<?php 

    $array_infopersonelle=array(

        "nom"=>"MOUKOURI NGOBE","prenom"=>"Armelle Hélène Christelle","metier"=>"Architecte logiciel / DevOps",
        
        "date_naiss"=>"Née le 7 Février 2001","region"=>"Originaire du Littoral Cameroun", "statut"=>"Célibataire, 0 enfants, RAS",

        "quartier"=>"Logpom","ville"=>"Douala-Cameroun","map"=>"4.053276, 9.765047",

        "telephone"=>"672608187","contacts"=>"Mobille, Telegram, Whatsapp",

        "email"=>"armellemoukouri@gmail.com", "reseauxsociaux"=>"Google+, Twitter, LinkedIn, Github",

        "projets"=>"+45", "contact_pro"=>"+31", "an_exper"=>"12 ANS"

    )

?>

<div class="images">

<div class="couverture"></div>
<div class="nav">

    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
      </svg>

      <input type="text" name="" placeholder="Besoin d'un chef de projet ? " id="" class="search">

      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path
              d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
      </svg>

      <span class="barre"></span>

    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
        <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
      </svg>
</div>
<div class="profil">
    <img src="img/photo_10 (1).jpg" width="120px" height="120px"  alt="" class="photo_profil">
    <div class="nom">
        <h3> <?= $array_infopersonelle['nom']?> <br> <?=$array_infopersonelle['prenom']?></h3>
        <p class="travail"> <?= $array_infopersonelle['metier']?></p>
    </div>
</div>
</div>
<div class="informations">

<span class="bouton_plus"><span>+</span></span>

<div class="info_perso">
    <div class="info_personnelle">
        <i class="fas fa-birthday-cake fa-3x"></i> 
        <div class="plus_info">
            <p><?= $array_infopersonelle['date_naiss']?></p>
            <p><?=$array_infopersonelle['region']?></p>
            <p><?=$array_infopersonelle['statut']?></p>
            <hr>
        </div>

    </div>
    <div class="info_personnelle">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path
                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
        </svg>
        <div class="plus_info">
            <p><?= $array_infopersonelle['quartier']?></p>
            <p><?= $array_infopersonelle['ville']?></p>
            <p>Map: <span class="info_supp"><?= $array_infopersonelle['map']?></span>
            </p>
            <hr>
        </div>

    </div>
    <div class="info_personnelle">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
            <path
                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
        </svg>
        <div class="plus_info">
            <p>(237) <?= $array_infopersonelle['telephone']?></p>
            <p class="info_supp"><?= $array_infopersonelle['contacts']?></p>
            <hr>
        </div>

    </div>
    <div class="info_personnelle">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path
                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
        </svg>
        <div class="plus_info">
            <p><?= $array_infopersonelle['email']?></p>
            <p class="info_supp"><?= $array_infopersonelle['reseauxsociaux']?></p>
        </div>

    </div>
</div>
<div class="projet">
    <div>
        <h5><?= $array_infopersonelle['projets']?> PROJETS</h5>
        <span class="active"></span>
    </div>
    <div>
        <h5 class="info_supp"><?= $array_infopersonelle['contact_pro']?> CONTACTS</h5>
        <span></span>
    </div>
    <div>
        <h5 class="info_supp"> <?= $array_infopersonelle['an_exper']?> D'EXP</h5>
        <span></span>
    </div>
</div>
</div>