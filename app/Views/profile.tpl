{extends file='base/layout.tpl'}
{block name=content}
<div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
    <div class="card p-4">
    {$pseudo}
        <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" /></button> <span class="name mt-3">Nom prenom</span>
            <div class=" d-flex mt-2"> <a href='login'class="btn btn1 btn-dark">Modier profile</a> </div>
            <div class="container">
                <div class="row">
                    <p>Nom prenom: </p>
                    <p>Pseudo: </p>
                    <p>Adresses de facturation: (adresses + pays)</p>
                    <p>Votre email: </p>
                    <p>Votre numero de telephone</p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
{/block}
