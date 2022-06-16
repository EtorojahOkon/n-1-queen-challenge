<?php

function printBoard($board) {
    print_r($board);
    exit;
}

function arrangeQueens($grid_no){
    $grid_no = intval($grid_no);
    $row_s= 0;
    $col_s = $grid_no - 1;
    $row_f= 0;
    $col_f = 0;
    $last_set = "s";
    $board = [];
        
    if ($grid_no > 1 && $grid_no <4) {
        $skipped = $grid_no;
    }
    else{
        $skipped = ($grid_no - 2) + 1 ;
    }
    
    if ($grid_no < 2) {
        return "Invalid grid number";
        exit;
    }

    if ($grid_no == 2) {
        $board[$row_f][$col_f] = "Q";
        printBoard($board);
    }

    for ($i=0; $i < $grid_no; $i++) { 

        if ($i == ($skipped - 1)) {
            $row_f = $row_f + 1;
            $row_s = $row_s + 1;
            $last_set = ($last_set == "f") ? "s" : "f";
            continue;
        }
        else {

            if ($last_set == "s") {
                $board[$row_f][$col_f] = "Q";
                $col_f = $col_f + 1;
                $row_f = $row_f + 1;
                $row_s = $row_s + 1;
                $last_set = "f";
            }
            else {
                $board[$row_s][$col_s] = "Q";
                $col_s = $col_s - 1;
                $row_f = $row_f + 1;
                $row_s = $row_s + 1;
                $last_set = "s";
            }
        
        }
            
    }

    printBoard($board);

}

echo arrangeQueens(3);