# 1 Details

<details>
  <summary class="text-purple-900">Conheça os criadores</summary>
  <section class="ml-4">
    <div>Cleiton Souza <small class="text-purple-700">COO</small></div>
    <div>Diego Fernandes <small class="text-purple-700">CTO</small></div>
    <div>Robson Marques <small class="text-purple-700">CEO</small></div>
  </section>
</details>


# 2 Datalist

<label for="weekday" class="text-purple-600 mr-2">Selecione o dia</label>
<input list="weekdays" name="weekday" id="weekday" 
         class="text-purple-800 pl-2 rounded shadow text-sm">
<datalist id="weekdays">
  <option value="Domingo">
  <option value="Segunda">
  <option value="Terça">
  <option value="Quarta">
  <option value="Quinta">
  <option value="Sexta">
  <option value="Sábado">
</datalist>


# 3 Content Editable

<h2 class="text-xl text-purple-700 mb-2"> Tarefas Diárias </h2>
<ul contenteditable class="text-sm ml-2">
  <li> 1. Criar vídeos CodeDrops </li>
  <li> 2. Criar vídeo para o curso </li>
  <li> 3. Estudar </li>
</ul>

# 4 Mark

<p> Você vai aprender <mark>até o final da sua jornada</mark> 
  e mesmo assim, terá muito pra aprender.
</p>

# 5 Optgroup

<label for="avaiable" class="mr-2">Em cartaz</label>
<select id="avaiable" name="avaiable" class="shadow bg-white"> 
  <optgroup label="19h00"> 
    <option value="1">Titanic</option> 
    <option value="2">Moulin Rouge</option> 
    <option value="3">Cidade de Deus</option>
  </optgroup>
  <optgroup label="20h00">
    <option value="4">O Senhor dos Anéis</option> 
    <option value="5">Batman</option> 
  </optgroup> 
</select>

# 6 progress

<progress value="50" max="100">Progress: 50%</progress>


# 7 inputs

<div class="p-4 bg-purple-600 text-white flex">
  <label for="volume" class="mr-4">Range</label>
  <input type="range" id="volume" name="volume"
         min="0" max="10">
</div>

<div class="p-4 bg-purple-100 text-purple-900 flex">
  <label for="when" class="mr-4">Date</label>
  <input type="date" id="when" name="trip-start"
       value="2020-09-22"
       min="2020-10-22" max="2020-12-22">
</div>

<div class="p-4 bg-purple-600 text-white flex">
  <label for="color" class="mr-4">Color</label>
  <input type="color" id="color" name="color">
</div>


<div class="p-4 bg-purple-100 text-purple-900 flex">
  <label for="hour" class="mr-4">Time</label>
  <input type="time" id="hour" name="hour"
       value="22:00">
</div>