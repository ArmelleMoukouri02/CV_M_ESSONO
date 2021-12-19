<?php 

    

    $array_infopersonelle= new Personne(

        "MOUKOURI ","Armelle Christelle","Architecte logiciel / DevOps",
        
        "Née le 7 Février 2001","Originaire du Littoral Cameroun", "Célibataire, 0 enfants, RAS",

        "Logpom","Douala-Cameroun","4.053276, 9.765047",

        "672608187","Mobille, Telegram, Whatsapp",

        "armellemoukouri@gmail.com", "Google+, Twitter, LinkedIn, Github",

        "+45","+31", "12 ANS",

        "img/photo_10.jpg",

        "img/photo_11.jpg",

    );
  


?>
<div class="images">

    <?php 
    
        $array_infopersonelle->get_composant5();
    
    ?>

    <!-- Modal -->

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
    </button> -->

    <!-- Modal -->
    <!-- <div class="modal fade" id="staticBackdrop" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> -->
    <div class="modal fade" id="staticBackdrop">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel" style="color: black;">Envoi du CV</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="height: 100%;">
                    <form action="Composants/email.php" method="POST">

                        <label for="email" class="col-form-label" style="color:black;">Email</label>
                        <input type="email" name="receptionEmail" id="" placeholder="Veuillez entrer l'adresse email" style="height: 40px; width:400px;border: 1px solid grey; border-radius:7px; box-sizing:border-box;"></br></br>

                        <div class="modal-footer" style="display: flex; justify-content:space-between;">
                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal"
                                style="background-color: grey;">Annuler</button>
                            <button type="submit" class="btn btn-primary"
                                style="background-color: blue;">Envoyer</button>
                        </div>

                    </form>
                </div>

                

            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel" style="color: black;">Téléchargement du CV</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="height: 100%;">
                    <form action="Traitements/telechargementpdf.php" method="POST">

                        <label for="email" class="col-form-label" style="color:black;">Télécharger</label>
                        
                        
                        
                            <button name="pdf" class="btn btn-primary"
                                style="background-color: red;"><i class="fas fa-file-pdf fa-4x"></i></button>
                    

                    </form>
                </div>

                

            </div>
        </div>
    
</div>



<script>
    const plus = document.querySelector('.plus');

    plus.addEventListener('click', () => {
        const shareBtn = document.querySelector('.bouton');
        shareBtn.classList.toggle('active');
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>