<?php
  include "cabecalho.php"
?>

<div class=divcliente>
  <ul class="nav flex-column nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#1">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#2">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#3">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#4">Disabled</a>
    </li>
  </ul>
</div>


<nav id="navbar2" class=" mt-2 navbar navbar-light bg-info text-white">
      <h4>Experiências</h4>
        <ul class="nav nav-pills text-white">
          <li class="nav-item ">
            <a class="nav-link text-white" href="#fat">Acadêmico</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="#mdo">Habilidades</a>
          </li>
          <li class="nav-item "> 
              <a class="nav-link text-white" href="#idi">Idiomas</a>
          </li>
        </ul>
      </nav>
      
      <div data-spy="scroll" data-target="#navbar2" data-offset="0">
        <h4 class="mt-2 text-white text-center" id="1">Acadêmico de engenharia da computação</h4>
        <div class="p-2 m-2 text-dark rounded" style="background-color: #c8dfee;">
          <p>
          </p>
        </div>
        <h4 class="text-white text-center" id="mdo">Algumas habilidades</h4>
        <div class="p-2 m-2 text-dark rounded" style="background-color: #c8dfee;">
        <p></p>
        <p></p>
        <p></p>
        </div>
        <h4 class="text-white text-center" id="1">Idiomas</h4>
        <div class="p-2 m-2 mb-5 text-dark rounded" style="background-color: #c8dfee;">
        <p></p>
        <p></p>
        </div>
      </div>