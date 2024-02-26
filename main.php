<html>
  <head>
    <title>PHP Test</title>
  </head> 
  <body>
    <?php
    
    // Definice result
    $result = "";
    class calculator
    {
      // definice variables 
        var $a;
        var $b;

      //definice funkce na zakladu jaky operator si vyberu v index.html
        function checkoperation($operator)
        {
            switch($operator)
            {
              case '+':
                return $this->x + $this->y;
                break;
     
                case '-':
                return $this->x - $this->y;
                break;
     
                case '*':
                return $this->x * $this->y;
                break;
     
                case '/':
                return $this->x / $this->y;
                break;
     
                default:
                return "Sorry No command found";
            }   
        }

        //defnice jaky variable je jaky
        function getresult($a, $b, $c)
        {
            $this->a = $a;
            $this->b = $b;
            return $this->checkoperation($c);
        }
    }

    checkoperation($operator);
    $cal = new calculator();
    if(isset($_POST['submit']))
    {   
      $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
    }  
    ?>


    <form method="post">
    <table align="center">
    <tr>
      <td><strong><?php echo $result; ?></strong></td>
    </tr>


    <tr>
      <td>Please enter 1st Number</td>
      <td><input type="text" name="num1"></td>
    </tr>

    <tr>
      <td>Please enter 2nd number</td>
      <td><input type="text" name="num2"></td>
    </tr>    

    <tr>
      <td>Select Operator</td>
      <td>
        <select name="op">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
        </select>
      </td>
    </tr>

    <tr>
      <td></td>
      <td><input type="submit" name="submit" value="                =                "></td>
    </tr>
  </table>
  </form>
  
  </body>
</html>