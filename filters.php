<?php 
/*
    // check for posted data
    if (filter_has_var(INPUT_POST, 'data')) {
        echo 'Data found';
    } else {
        echo 'Data not found';
    }
*/

/*
    // validate data
    if (filter_has_var(INPUT_POST, 'data')) {

        $email = $_POST['data'];

        // remove illegal characters

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email."<br>";
        // if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Email is valid';
        } else {
            echo 'Invalid email';
        }
    }

*/

    /**
     * FILTER VALIDATIONS AVAILABLE
     * 
     * FILTER_VALIDATE_EMAIL
     * FILTER_VALIDATE_FLOAT
     * FILTER_VALIDATE_INT
     * FILTER_VALIDATE_IP
     * FILTER_VALIDATE_REGEXP
     * FILTER_VALIDATE_URL
     * FILTER_VALIDATE_BOOLEAN
     * 
     */
    
     /**
      *FILTER SANITIZATION  
      *
      *FILTER_SANITIZE_EMAIL
      *FILTER_SANITIZE_ENCODED
      *FILTER_SANITIZE_NUMBER_FLOAT
      *FILTER_SANITIZE_NUMBER_INT
      *FILTER_SANITIZE_SPECIAL_CHARS
      *FILTER_SANITIZE_STRING
      *FILTER_SANITIZE_URL
      *
      */

      /*
      $var = 23;

      if (filter_var($var, FILTER_VALIDATE_INT)){
          echo $var.' is a number';
      } else {
          echo $var.' is not a number';
      }
      */
/*
      $var = '1233hlkjh324323lkjh2l2k3jhpoi234';
    //   var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

      $var2 = '<script>alert(Heeeeeey)</script>';
      echo filter_var($var2, FILTER_SANITIZE_SPECIAL_CHARS);
*/
/*
      $filters = [
          "data" => FILTER_VALIDATE_EMAIL,
          "data2" => array(
              "filter" => FILTER_VALIDATE_INT,
              "options" => array(
                  "min_range" => 1,
                  "max_range" => 1000
              )
          )
              ];

    print_r(filter_input_array(INPUT_POST, $filters));
    */

    $arr = [
        'name' => 'Thando mini',
        'age' => '335', 
        'email' => 'thando@mail.com'
    ];

    $filters = [
        'name' => [
            'filter' => FILTER_CALLBACK,
            'options' => 'ucwords'
        ],
        'age' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' => [
                'min_range' => 1,
                'max_range' => 120
            ]
        ],
        'email' => FILTER_VALIDATE_EMAIL
    ];

    print_r(filter_var_array($arr, $filters));

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>