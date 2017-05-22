<?php
echo '<form action="autooverzicht.php" method="get">
       <div class="form-group">
        <label for="sel1">Merk:</label><br>
        <select class="form-control" id="merk" name="merk">
            <option value>--Alle merken--</option>
            <option value="Audi">Audi</option>
            <option value="Mercedes">Mercedes</option>
            <option value="Ferrari">Ferrari</option>
            <option value="Mini">Mini</option>
            <option value="Ford">Ford</option>
            <option value="BMW">BMW</option>
        </select>
       </div>
       
       <div class="form-group">
        <label for="type">Minimale prijs:</label><br>
        <input type="text" class="form-control" id="type" name="minprijs" value>
       </div>
       
       <div class="form-group">
        <label for="prijs">Maximale prijs:</label><br>
        <input type="text" class="form-control" id="prijs" name="maxprijs" value>
       </div>
       
       <button type="submit" name="knop" value="submit" class="btn btn-default">Submit</button>
      </form>
      <div class="row">
      <div class="col-sm-15"> ';
?>
