<?php

    class Report{
        private $error=array(),$passed = false;
        
        public function RecognizeReport($type,$report){
            if($report == 'detailed'){
                return $this->detailReport($type);
            }
            else if($report == 'summary'){
                return $this->summaryReport($type);
            }
            else if($report == 'graph'){
                return $this->graphReport($type);
            }
            else
                return $this->Error();
        }
        
        public function detailReport($type){
            echo '<form method="post" action="">';
            echo '<table class="table-report table table-bordered">
                    <tr class="switch1">
                        <td class="span1" style="text-align: center;"><input type="radio" name="choose" id="simple_radio" checked target="input1"/></td>
                        <td class="right"> Range</td>
                        <td class="input1">
                            <div id="reportrange" class="input-prepend">
                                <span class="add-on"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="inputrange" id="inputrange"/><i class="fa fa-chevron-down pull-right"></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="switch2">
                        <td class="span1" style="text-align: center;"><input type="radio" name="choose" id="complex_range" target="input2"/></td>
                        <td class="right">Custom Range</td>
                        <td class="input2">
                            <input type="text" name="custom_from" class="from_date" placeholder="Select start date" data-date-format="dd/mm/yyyy" contenteditable="false">
                            <input type="text" name="custom_to" class="to_date" placeholder="Select end date" data-date-format="dd/mm/yyyy" contenteditable="false">
                        </td>
                    </tr>
                    <tr>
                        <td></td>';
                                require "../../config/config.php";
                                if($type == 'customer'){
                                echo '<td class="right">Select '.ucwords($type).'</td>
                                <td>
                                <select class="span4" name="op_select">';
                                    $query = $con->query("Select * from tbl_cust");
                                    $query->execute();
                                    if($query->rowCount()!=0){
                                        while($r = $query->fetch()){
                                            echo "<option value=".$r['cust_id'].">".ucwords($r['cust_fname']).' '.ucwords($r['cust_lname'])."</option>";
                                        }
                                    }
                                echo '</select></td>';
                                }
                                else if($type == 'employee'){
                                echo '<td class="right">Select '.ucwords($type).'</td>
                                <td>
                                <select class="span4" name="op_select">';
                                    $query = $con->query("Select * from tbl_employee");
                                    $query->execute();
                                    if($query->rowCount()!=0){
                                        while($r = $query->fetch()){
                                            echo "<option value=".$r['user_id'].">".ucwords($r['fname']).' '.ucwords($r['lname'])."</option>";
                                        }
                                    }
                                    
                                    echo '</select></td>';
                                }
                                else if($type == 'items'){
                                echo '<td class="right">Select '.ucwords($type).'</td>
                                <td>
                                <select class="span4" name="op_select">';
                                    $query = $con->query("Select * from tbl_goods");
                                    $query->execute();
                                    if($query->rowCount()!=0){
                                        while($r = $query->fetch()){
                                            echo "<option value=".$r['goods_id'].">".ucwords($r['goods_name'])."</option>";
                                        }
                                    }
                                    echo '</select></td>';
                                }
                                else if($type == 'profit'){
                                echo '<td class="right">Select '.ucwords($type).'</td>
                                <td>
                                <select class="span4" name="op_select">';
                                    $query = $con->query("Select * from tbl_employee");
                                    $query->execute();
                                    if($query->rowCount()!=0){
                                        while($r = $query->fetch()){
                                            echo "<option value=".$r['user_id'].">".ucwords($r['fname']).' '.ucwords($r['lname'])."</option>";
                                        }
                                    }
                                    echo '</select></td>';
                                }
                                
                    echo '</tr>
                    <tr>
                        <td colspan="2"></td>
                        <td><input type="submit" class="btn btn-info" id="generate_report"/></td>
                    </tr>
            </table></form>';
        }
        
        public function summaryReport($type){
            echo '<form method="post" action="">';
            echo '<table class="table-report table table-bordered">
                    <tr class="switch1">
                        <td class="span1" style="text-align: center;"><input type="radio" name="choose" id="simple_radio" checked target="input1"/></td>
                        <td class="right"> Range</td>
                        <td class="input1">
                            <div id="reportrange" class="input-prepend">
                                <span class="add-on"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="inputrange" id="inputrange"/><i class="fa fa-chevron-down pull-right"></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="switch2">
                        <td class="span1" style="text-align: center;"><input type="radio" name="choose" id="complex_range" target="input2"/></td>
                        <td class="right">Custom Range</td>
                        <td class="input2">
                            <input type="text" name="custom_from" class="from_date" placeholder="Select start date" data-date-format="dd/mm/yyyy" contenteditable="false">
                            <input type="text" name="custom_to" class="to_date" placeholder="Select end date" data-date-format="dd/mm/yyyy" contenteditable="false">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td><input type="submit" class="btn btn-info" id="generate_report"/></td>
                    </tr>
                </table></form>';
        }
        
        public function graphReport($type){
            echo '<form method="post" action="">';
            echo '<table class="table-report table table-bordered">
                    <tr class="switch1">
                        <td class="span1" style="text-align: center;"><input type="radio" name="choose" id="simple_radio" checked target="input1"/></td>
                        <td class="right"> Range</td>
                        <td class="input1">
                            <div id="reportrange" class="input-prepend">
                                <span class="add-on"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="inputrange" id="inputrange"/><i class="fa fa-chevron-down pull-right"></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="switch2">
                        <td class="span1" style="text-align: center;"><input type="radio" name="choose" id="complex_range" target="input2"/></td>
                        <td class="right">Custom Range</td>
                        <td class="input2">
                            <input type="text" name="custom_from" class="from_date" placeholder="Select start date" data-date-format="dd/mm/yyyy" contenteditable="false">
                            <input type="text" name="custom_to" class="to_date" placeholder="Select end date" data-date-format="dd/mm/yyyy" contenteditable="false">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td><input type="submit" class="btn btn-info" id="generate_report"/></td>
                    </tr>
                </table></form>';
            
        }
        
        public function drawReport(){
            
        }
        
        public function Error(){
            return false;
        }
        
    }

?>