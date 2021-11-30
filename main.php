<div id="promo">
    <h1 id="promoText">
        Планировщик задач 
    </h1>
</div>
<div id="add">
    <button id="open-button" onclick="openForm()">Добавить задачу</button> 
</div>
<div id="searchForm">
    <form action ="" method="post" class="formSearch">
        <input type="text" name="dataSearch" class="dataSearch" placeholder="Поиск по названию">
        <input type="submit" name="subData" class ="subData" value="Поиск"> 
        <input type="text" name="search" class="search" placeholder="Поиск по дате">
        <input type="submit" name="sub" class ="subData" value="Поиск"> 
        <input type="submit" name="subBack" class ="subData" value="Вернуться"> 
    </form>
</div>
<div id="contentForm">
    <div id="myForm">
        <form action ="" method="post" class="formContainer">
            <h2 id="heading">Добавление задачи</h2>
            <label>Название</label><br>
            <input type="text" name="name" value="" required><br>
            <label>Дата</label><br>
            <input type="text" name="data" value="" required><br>
            <button type="submit" class="btn" onclick="closeForm()">Добавить</button>
        </form>
    </div>
</div>