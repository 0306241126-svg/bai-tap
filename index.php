<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="http://www.google.com/search">
  <div>
    Let's search Google:
    <input name="q" />
    <input type="submit" /><br>

     <input type="text" name="a" value="Colbert Report" />
    <input type="submit" value="Booyah!" /><br>
  
    <input type="text" size="10" maxlength="8" /> NetID <br />
    <input type="password" size="16" /> Password
    <input type="submit" value="Log In" /><br>	

    <textarea rows="4" cols="20">
    Type your comments here.
    </textarea>		
   </br>
    <input type="checkbox" name="lettuce" /> Lettuce
    <input type="checkbox" name="tomato" checked="checked" /> Tomato
    <input type="checkbox" name="pickles" /> Pickles 
   </br>
    <input type="radio" name="cc" value=" Visa" checked="checked" /> Visa
    <input type="radio" name="cc" value="MasterCard" /> MasterCard
    <input type="radio" name="cc" value="American Express" /> American Express
   </br>
    <label><input type="radio" name="cc" value="visa" checked="checked" /> Visa</label>
    <label><input type="radio" name="cc" value="mastercard" /> MasterCard</label>
    <label><input type="radio" name="cc" value="amex" /> American Express</label><br>
    <select name="favoritecharacter">
    <option>Frodo</option>
     <option>Bilbo</option>
        <option selected="selected">Gandalf</option>
    <option>Galandriel</option>
    </select>
    <br>
        <select name="favoritecharacter[]" size="3" multiple="multiple">
  <option>Frodo</option>
  <option>Bilbo</option>
  <option>Gandalf</option>
  <option>Galandriel</option>
  <option selected="selected">Aragorn</option>
</select>
  </div>
      
</form>   
                                                        
    
</body>
</html>