	 function createEntry(){
            $('#modal_createentry').modal('show');	
        }
		
	
	function Dr(){
								
		var DrTitle= document.getElementById('selectdr').value;
		//document.getElementById('Result_Dr').innerHTML = DrTitle;
								
		var AmountDr = document.getElementById('AmountDr').value;	
		//document.getElementById('Result_AmtDr').innerHTML =Amount;
		var DebitTable = document.getElementById("DebitTable");
		var row = DebitTable.insertRow(-1);
		
		
			var Result_Dr = row.insertCell(0);
				var debit_name_input = document.createElement('input');
				debit_name_input.type='hidden';
				debit_name_input.name='drnames[]';
				debit_name_input.value=DrTitle;
				Result_Dr.innerHTML = DrTitle;
				Result_Dr.appendChild(debit_name_input);
		
		
			var Result_AmtDr = row.insertCell(1);
				var debit_value_input = document.createElement('input');
				debit_value_input.type='hidden';
				debit_value_input.name='drvalues[]';
				debit_value_input.value=AmountDr;
				Result_AmtDr.innerHTML = AmountDr;
				Result_AmtDr.appendChild(debit_value_input);


		var DelDr = row.insertCell(2);
		DelDr.innerHTML = "<button type='button' class='btn bg-maroon btn-xs fa fa-trash' onclick='deleteDr(this)'></button>"
		
		
		
				
		return false;
	}

						
	function Cr(){
			
		var CrTitle= document.getElementById('selectcr').value;
								
		var AmountCrvalue = document.getElementById('AmountCr').value;	

		var CreditTable = document.getElementById("CreditTable");
		var row = CreditTable.insertRow(-1);
		
			var Result_Cr = row.insertCell(0);
				var credit_name_input = document.createElement('input');
				credit_name_input.type='hidden';
				credit_name_input.name='crnames[]';
				credit_name_input.value=CrTitle;
				Result_Cr.innerHTML = CrTitle;
				Result_Cr.appendChild(credit_name_input);
				
			var Result_AmtCr= row.insertCell(1);
				var credit_value_input = document.createElement('input');
				credit_value_input .type='hidden';
				credit_value_input.name='crvalues[]';
				credit_value_input .value=AmountCrvalue;
				Result_AmtCr.innerHTML = AmountCrvalue;
				Result_AmtCr.appendChild(credit_value_input);
		
		var DelCr = row.insertCell(2);
		DelCr.innerHTML = "<button type='button' class='btn bg-maroon btn-xs fa fa-trash' onclick='deleteCr(this)'></button>"
		
	
		

				
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
	
	
