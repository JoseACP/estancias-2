<?php 

    function displayMenu($conn,$db){

        $sql = "SELECT * FROM ". $db ." ORDER BY precio ASC";
            $result = $conn ->query($sql);

            if ($result->num_rows > 0) 
                {
                    // OUTPUT DATA OF EACH ROW
                    while($row = $result->fetch_assoc())
                    {
                        echo(

                            '<div class="menu-product">
                                <div class="menu-product-title">' . $row["nombre"] .'</div>
                                <div class="menu-product-price">$'.$row["precio"].'</div>
                                <div class="menu-product-desc">'. $row["descripcion"] .'</div>
                            </div>'

                        );

                    }
                } 
                else {
                    echo "Something Went Wrong...";
                }

    }
    
?>