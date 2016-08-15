	 function createEntry(){
            $('#modal_createentry').modal('show');	
        }
		
	var dr_id = 1;
	
	function Dr(){
								
		var DrTitle= document.getElementById('selectdr').value;
		//document.getElementById('Result_Dr').innerHTML = DrTitle;
								
		var AmountDr = document.getElementById('AmountDr').value;	
		//document.getElementById('Result_AmtDr').innerHTML =Amount;
		var DebitTable = document.getElementById("DebitTable");
		var row = DebitTable.insertRow(-1);
		var Result_Dr = row.insertCell(0);
		var Result_AmtDr = row.insertCell(1);
		var DelDr = row.insertCell(2);
		Result_Dr.innerHTML = DrTitle;
		Result_AmtDr.innerHTML = AmountDr;
		DelDr.innerHTML = "<button type='button' class='btn bg-maroon btn-xs fa fa-trash' onclick='deleteDr(this)'></button>"
		
		row.id = dr_id;
		dr_id++;
		
		
				
		return false;
	}
	
	var cr_id = 1;
						
	function Cr(){
			
		var CrTitle= document.getElementById('selectcr').value;
								
		var AmountCrvalue = document.getElementById('AmountCr').value;	

		var CreditTable = document.getElementById("CreditTable");
		var row = CreditTable.insertRow(-1);
		var Result_Cr = row.insertCell(0);
		var Result_AmtCr= row.insertCell(1);
		var DelCr = row.insertCell(2);
		Result_Cr.innerHTML = CrTitle;
		Result_AmtCr.innerHTML = AmountCrvalue;
		DelCr.innerHTML = "<button type='button' class='btn bg-maroon btn-xs fa fa-trash' onclick='deleteCr(this)'></button>"
		
		row.id = cr_id;
		cr_id++;
		

				
		return false;
	}
	
	
	function deleteDr(r){
		
		    var i = r.parentNode.parentNode.rowIndex;
			document.getElementById("DebitTable").deleteRow(i);
		
	}
	
	
	function deleteCr(r){
		
		    var i = r.parentNode.parentNode.rowIndex;
			document.getElementById("CreditTable").deleteRow(i);
		
	}
	
	
	function clearTable(){
		var tableHeaderRowCount = 1;
		var table = document.getElementById('DebitTable');
		var rowCount = table.rows.length;
			for (var i = tableHeaderRowCount; i < rowCount; i++) {
				table.deleteRow(tableHeaderRowCount);
			}

		var table = document.getElementById('CreditTable');
		var rowCount = table.rows.length;
			for (var i = tableHeaderRowCount; i < rowCount; i++) {
				table.deleteRow(tableHeaderRowCount);
			}
			
			dr_id=1;
			cr_id=1;
			document.getElementById('AmountDr').value = "";
			document.getElementById('AmountCr').value = "";
	}
	
	
