<!DOCTYPE html>
<html>
<head>
    
    <title>ORDER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bg">
    <br><br>
    <center><h3>ORDER</h3></center><br><br>
    <br><br><center><table>
        <tr>
            <th>SELECT FOOD:
                <select item name>
                    <optgroup label="BASED ON PREPARATION TIME:">
            <option
            value="MAGGI 5MIN 20/-">MAGGI 5MIN</option>
            <option
            value="PIZZA 30 MIN 220/-">PIZZA(VEG/NON-VEG) 30MIN</option>
            <option
            value="MILKSHAKE 15 MIN 80/-">MILKSHAKES 15MIN</option>
            <option
            value="BIRYANI 1 HOUR 250/-">BIRYANI(VEG/NON-VEG) 30MIN</option>
            <option
            value="ROTI&DAL 45 MIN 100/-">ROTI&DAL 45MIN</option>
            <option
            value="MANCHURIAN 5MIN 70/-">MANCHURIAN 5MIN</option>
            <option
            value="PASTA 30MIN 170/-">PASTA 30MIN</option>
            <option
            value="SANDWICH 15MIN 110/-">SANDWICH 15MIN</option>
            <option
            value="STEAK 20MIN 480/-">STEAK 20MIN</option>
            <option
            value="CHOWMEIN 45MIN 620/-">CHOWMEIN 45MIN</option>
            <option
            value="BREADS(ALL) 30MIN 100/-">BREADS 30MIN</option>
            <option
            value="BREAKFAST 30MIN 100/-">BREAKFAST 30MIN</option>
            <option
            value="FRESH FRUIT JUICE 25MIN 80/-">FRESH FRUIT JUICE 25MIN</option>
            <option
            value="SALADS 10MIN 50/-">SALADS 10MIN</option>
            <option
            value="HOTDOG 30MIN 100/-">HOTDOG 30MIN</option>
            <option 
            value="CHAT(ALL) 25MIN 30/-">CHAT 25MIN</option>
            <option
            value="TACO 15MIN 180/-">TACO 15MIN</option>
            </optgroup>
            <optgroup label="BASED ON PRICE:">
            <option
            value="FRIES 20MIN 220/-">FRIES  220/-</option>
            <option
            value="LEMONADE 25MIN 150/-">LEMONADE 150/-</option>
            <option
            value="PANI PURI 10MIN 20/-">PANI PURI 20/-</option>
            <option
            value="THALI 1HR 500/-">THALI 500/-</option>
            <option
            value="NACHOS 30MIN 340/-">NACHOS 340/-</option>
            <option
            value="SPRING ROLLS 500/-">SPRING ROLLS 500/-</option>
            <option
            value="SOUPS 670/-">SOUPS 670/-</option>
            <option
            value="RICE(ALL TYPES) 150/-">RICE(ALL TYPES) 150/- </option>
            <option
            value="BURGER 200/-">BURGER 200/-</option>
            <option
            value="NOODLES 180/-">NOODLES 180/-</option>
            <option
            value="COCKTAIL(ALL) 340/-">COCKTAIL 340/-</option>
            <option
            value="KEBAB(VEG/NON-VEG) 220/-">KEBAB 220/-</option>
            <option
            value="DESERTS 450/-">DESERTS 450/-</option>
            <option
            value="SIZZLERS 520/-">SIZZLERS 520/-</option>
            <option
            value="PAV BHAJI 70/-">PAV BHAJI 70/-</option>
            <option
            value="TOFU 150/-">TOFU 150/-</option>
            </optgroup>
                </th>
        </tr>
        </select>
    
    
    
    </table>
    </center>
    <center>
   <br><br><br> <button onclick="ordernow()">PLACE ORDER</button>
    <script>
        function ordernow() {
            alert("ORDER PLACED TASTY FOOD ENROUTE");
            location.replace("home.html");
        }
    </script>
    </center>

    
  </div>
    
</body>
</html>