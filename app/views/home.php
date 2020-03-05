<?php
require_once('../template/template.php');
template::header('Instagram Clone');
?>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-sm-12">
            <div class="border">
                <div class="m-2">
                    <a href=""><img class="rounded-circle" width="25" src="https://scontent.fsal1-1.fna.fbcdn.net/v/t1.0-9/p960x960/79734708_2467473576801019_4564267208657600512_o.jpg?_nc_cat=104&_nc_sid=85a577&_nc_ohc=jS-jUvqQNI4AX9bspVb&_nc_ht=scontent.fsal1-1.fna&_nc_tp=6&oh=06352883c3ac386387b8736eb8e48610&oe=5E8118FF" alt=""></a><span class="ml-3"><a href="" class="text-dark"><strong>josue_ayala27</strong></a></span>
                    <span class="float-right"><a class="text-dark" href="" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-bars"></i></a></span>
                </div>
            </div>
            <div>
                <img class="img-fluid" src="https://scontent.fsal5-1.fna.fbcdn.net/v/t1.0-9/p960x960/79734708_2467473576801019_4564267208657600512_o.jpg?_nc_cat=104&_nc_sid=85a577&_nc_ohc=jS-jUvqQNI4AX9bspVb&_nc_ht=scontent.fsal5-1.fna&_nc_tp=6&oh=ed580eee7ecc72ba9ba27bd9722b720c&oe=5E8118FF" alt="">
            </div>
            <div class="footer_photo">

                <span class="button_pressed d-none"><button class="btn btn-white" type="button"><svg aria-label="Ya no me gusta" class="_8-yf5 " fill="#ED4956" height="24" viewBox="0 0 48 48" width="24">
                            <path clip-rule="evenodd" d="M35.3 35.6c-9.2 8.2-9.8 8.9-11.3 8.9s-2.1-.7-11.3-8.9C6.5 30.1.5 25.6.5 17.8.5 9.9 6.4 3.5 13.7 3.5 20.8 3.5 24 8.8 24 8.8s3.2-5.3 10.3-5.3c7.3 0 13.2 6.4 13.2 14.3 0 7.8-6.1 12.3-12.2 17.8z" fill-rule="evenodd"></path>
                        </svg></button></span>

                <span class="button_not_pressed"><button class="btn btn-white" type="button"><svg aria-label="Me gusta" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                            <path clip-rule="evenodd" d="M34.3 3.5C27.2 3.5 24 8.8 24 8.8s-3.2-5.3-10.3-5.3C6.4 3.5.5 9.9.5 17.8s6.1 12.4 12.2 17.8c9.2 8.2 9.8 8.9 11.3 8.9s2.1-.7 11.3-8.9c6.2-5.5 12.2-10 12.2-17.8 0-7.9-5.9-14.3-13.2-14.3zm-1 29.8c-5.4 4.8-8.3 7.5-9.3 8.1-1-.7-4.6-3.9-9.3-8.1-5.5-4.9-11.2-9-11.2-15.6 0-6.2 4.6-11.3 10.2-11.3 4.1 0 6.3 2 7.9 4.2 3.6 5.1 1.2 5.1 4.8 0 1.6-2.2 3.8-4.2 7.9-4.2 5.6 0 10.2 5.1 10.2 11.3 0 6.7-5.7 10.8-11.2 15.6z" fill-rule="evenodd"></path>
                        </svg></button></span>

                <span class="comment"><button class="btn btn-white" type="button"><svg aria-label="Comentar" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                            <path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path>
                        </svg></button></span>

                <span class="float-right"><button class="btn btn-white" type="button"><svg aria-label="Guardar" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                            <path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path>
                        </svg></button></span>

                <span class="float-right d-none"><button class="btn btn-white" type="button"><svg aria-label="Eliminar" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                            <path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 28.9 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1z"></path>
                        </svg></button></span>

                <div class="description-photo ">
                    <p><strong>josue_ayala27 </strong><span>For keep this things on my mind </span><a href="">mas...</a></p>
                </div>

            </div>
        </div>
        <div class="col-lg-4 px-0 d-none d-sm-none d-md-block">
            <div class="" style="left: 699px;">
                <img width="60" class="rounded-circle" src="https://scontent.fsal5-1.fna.fbcdn.net/v/t1.0-9/p960x960/79734708_2467473576801019_4564267208657600512_o.jpg?_nc_cat=104&_nc_sid=85a577&_nc_ohc=jS-jUvqQNI4AX9bspVb&_nc_ht=scontent.fsal5-1.fna&_nc_tp=6&oh=ed580eee7ecc72ba9ba27bd9722b720c&oe=5E8118FF" alt=""><span class="m-3"><strong><a href="" class="text-dark">josue_ayala27</a></strong></span>
                <div class="border mt-4">
                    <div class="m-2">
                        <span class=""><a class="text-secondary"><strong>Sugerencias para ti</strong></a></span>
                        <span class="float-right"><a class="text-dark" href="">Ver todo</a></span>
                    </div>
                    <div class="">

                    </div>
                    <div class="m-3">
                        <img width="40" class="rounded-circle" src="https://scontent.fsal5-1.fna.fbcdn.net/v/t1.0-9/p960x960/79734708_2467473576801019_4564267208657600512_o.jpg?_nc_cat=104&_nc_sid=85a577&_nc_ohc=jS-jUvqQNI4AX9bspVb&_nc_ht=scontent.fsal5-1.fna&_nc_tp=6&oh=ed580eee7ecc72ba9ba27bd9722b720c&oe=5E8118FF" alt=""><span class="m-3"><strong><a href="" class="text-dark">daya__30</a></strong></span><span class="float-right"><a class="text-primary" href="">Seguir</a></span>
                    </div>
                    <div class="m-3">
                        <img width="40" class="rounded-circle" src="https://scontent.fsal5-1.fna.fbcdn.net/v/t1.0-9/p960x960/79734708_2467473576801019_4564267208657600512_o.jpg?_nc_cat=104&_nc_sid=85a577&_nc_ohc=jS-jUvqQNI4AX9bspVb&_nc_ht=scontent.fsal5-1.fna&_nc_tp=6&oh=ed580eee7ecc72ba9ba27bd9722b720c&oe=5E8118FF" alt=""><span class="m-3"><strong><a href="" class="text-dark">heigdez</a></strong></span><span class="float-right"><a class="text-primary" href="">Seguir</a></span>
                    </div>
                    <div class="m-3">
                        <img width="40" class="rounded-circle" src="https://scontent.fsal5-1.fna.fbcdn.net/v/t1.0-9/p960x960/79734708_2467473576801019_4564267208657600512_o.jpg?_nc_cat=104&_nc_sid=85a577&_nc_ohc=jS-jUvqQNI4AX9bspVb&_nc_ht=scontent.fsal5-1.fna&_nc_tp=6&oh=ed580eee7ecc72ba9ba27bd9722b720c&oe=5E8118FF" alt=""><span class="m-3"><strong><a href="" class="text-dark">fstacy10</a></strong></span><span class="float-right"><a class="text-primary" href="">Seguir</a></span>
                    </div>
                    <div class="m-3">
                        <img width="40" class="rounded-circle" src="https://scontent.fsal5-1.fna.fbcdn.net/v/t1.0-9/p960x960/79734708_2467473576801019_4564267208657600512_o.jpg?_nc_cat=104&_nc_sid=85a577&_nc_ohc=jS-jUvqQNI4AX9bspVb&_nc_ht=scontent.fsal5-1.fna&_nc_tp=6&oh=ed580eee7ecc72ba9ba27bd9722b720c&oe=5E8118FF" alt=""><span class="m-3"><strong><a href="" class="text-dark">joseguevara_2</a></strong></span><span class="float-right"><a class="text-primary" href="">Seguir</a></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Modal config image-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-center">
            <div class="modal-body">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="" class="text-danger"><strong>Reportar contenido inapropiado</strong></a></li>
                    <li class="nav-item"><a href="" class="text-danger"><strong>Dejar de seguir</strong></a></li>
                    <li class="nav-item"><a href="" class="text-secondary"><strong>Ir a la publicación</strong></a></li>
                    <li class="nav-item"><a href="" class="text-secondary"><strong>Compartir</strong></a></li>
                    <li class="nav-item"><a href="" class="text-secondary"><strong>Copiar enlacer</strong></a></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript Dependencies: jQuery, Popper.js, Bootstrap JS, Shards JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://designrevision.com/demo/shards/scripts/main.js?v=2.0.0"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>