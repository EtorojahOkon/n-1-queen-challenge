printBoard = (board) => {
    console.log(board)
}

arrangeQueens = (gridNo) => {
    var rowS= 0;
    var colS = gridNo - 1
    var rowF= 0;
    var colF = 0;
    var lastSet = "s";
    var board = [];
    var skipped;

    if (gridNo > 1 && gridNo < 4) {
        skipped = gridNo
    }
    else{
        skipped = (gridNo - 2) + 1
    }

    if (gridNo < 2) {
        console.log("Invalid Grid number")
    }

    if (gridNo == 2) {
        board.push([rowF, colF])
        printBoard(board)
    }
    else{
        for (let i = 0; i < gridNo; i++) {
        
            if (i == (skipped - 1)) {
                rowF = rowF + 1
                rowS = rowS + 1
                lastSet = (lastSet == "f") ? "s" : "f"
                continue
            } 
            else {
                
                if (lastSet == "s") {
                    board.push([rowF, colF])
                    colF = colF + 1
                    rowF = rowF + 1
                    rowS = rowS + 1
                    lastSet = "f"
                } 
                else {
                    board.push([rowS, colS])
                    colS = colS - 1
                    rowF = rowF + 1
                    rowS = rowS + 1
                    lastSet = "s"
                }
    
            }
                 
        }
    
        printBoard(board)

    }    

}

arrangeQueens(2)