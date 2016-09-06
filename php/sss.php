<?php
require_once("../support/config.php");
$query=$connection->myQuery("SELECT accounts.account_name,
									SUM(journal_details.amount) as total, 
									journals.journal_date, MONTH(journals.journal_date) as month_of_expense FROM `journal_details` 
									INNER JOIN accounts on accounts.acc_id = journal_details.account_id
									INNER JOIN account_types on accounts.type = account_types.acc_types_id
									INNER JOIN journal_entries on journal_entries.journal_entry_no = journal_details.journal_entry_no
									INNER JOIN journals on journal_entries.journal_id = journals.journal_id
								where account_types.acc_types_id = 1
								AND YEAR(journals.journal_date) = YEAR(CURRENT_DATE) 
								AND journal_details.is_debit = 0 group by type, MONTH(journals.journal_date)");
			$array = [];
			
			while($row = $query->fetch(PDO::FETCH_ASSOC)){
				$array["Gross Income"][] = array($row['month_of_expense']-1, $row['total']);
			}
			
			$query=$connection->myQuery("SELECT accounts.account_name,
									SUM(journal_details.amount) as total, 
									journals.journal_date, MONTH(journals.journal_date) as month_of_expense FROM `journal_details` 
									INNER JOIN accounts on accounts.acc_id = journal_details.account_id
									INNER JOIN account_types on accounts.type = account_types.acc_types_id
									INNER JOIN journal_entries on journal_entries.journal_entry_no = journal_details.journal_entry_no
									INNER JOIN journals on journal_entries.journal_id = journals.journal_id
								where account_types.acc_types_id = 3 
								AND YEAR(journals.journal_date) = YEAR(CURRENT_DATE) 
								AND journal_details.is_debit = 1 group by type, MONTH(journals.journal_date)");
			while($row = $query->fetch(PDO::FETCH_ASSOC)){
				$array["Expenses"][] = array($row['month_of_expense']-1, $row['total']);
			}
				
			
			foreach($array as $title){
				
				for($i = 0;$i<=count($title)-1;$i++){
					echo $title[$i][$i].'<br>';
					//echo $i.'nigga<br>';
					//$array['Net Income'][$index][]=
				}
				//print_r($title);
				
			}
			
			echo json_encode($array);
	?>		