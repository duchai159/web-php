<?php
echo '<h1>Trang DrawTable</h1>';
echo '<div class="container">
        <div class="input-box">
            <label for="numRows">Số dòng:</label>
            <input type="number" id="numRows" name="numRows">
        </div>
        <div class="input-box">
            <label for="numCols">Số cột:</label>
            <input type="number" id="numCols" name="numCols">
        </div>
    </div>
    <div class="button-table">
        <button onclick="resetTable()">Nhập Lại</button>
        <button onclick="drawTable()">Vẽ</button>
    </div>
    <div id="tableContainer">
        <!-- Đây là nơi sẽ hiển thị bảng sau khi vẽ -->
    </div>';
?>
<script>
    function resetTable() {
        // Xử lý logic khi nhấp vào nút "Nhập Lại"
        document.getElementById('numRows').value = '';
        document.getElementById('numCols').value = '';
        document.getElementById('tableContainer').innerHTML = '';
    }

    function drawTable() {
        // Xử lý logic khi nhấp vào nút "Vẽ"
        var numRows = parseInt(document.getElementById('numRows').value);
        var numCols = parseInt(document.getElementById('numCols').value);
        var tableHTML = '<table>';
        
        for (var i = 0; i < numRows; i++) {
            tableHTML += '<tr>';
            for (var j = 0; j < numCols; j++) {
                if(i >= j){
                    tableHTML += '<td>'+ (1 + j) +'</td>';
                }else{
                    tableHTML += '<td></td>';
                }
            }
            tableHTML += '</tr>';
        }

        tableHTML += '</table>';
        document.getElementById('tableContainer').innerHTML = tableHTML;
    }
</script>