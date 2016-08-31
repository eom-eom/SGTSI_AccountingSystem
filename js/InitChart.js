
function initChart(){

	
		$.get("php/initchart.php",{request:'initchart',type:"expense"},function(data){
			console.log(data);
			var series=[];
			$.each(data,function(key, val){
				var subseries = {};
					subseries.label = key;
					subseries.data = val;
					series.push(subseries);   	
			});
			console.log(series);
			$.plot("#linegraph1",series,{
				series:{
					bars:{
						show:true, barWidth:0.15,order:1
					}
				},
				xaxis:{mode:"category",ticks:[
					[0, "January"],
					[1, "February"],
					[2, "March"],
					[3, "April"],
					[4, "May"],
					[5, "June"],
					[6, "July"],
					[7, "August"],
					[8, "September"],
					[9, "October"],
					[10, "November"],
					[11, "December"],
				], tickLength:1}});
		},'json');
		
		
			$.get("php/initchart.php",{request:'initchart',type:"income"},function(data){
			console.log(data);
			var series=[];
			$.each(data,function(key, val){
				var subseries = {};
					subseries.label = key;
					subseries.data = val;
					series.push(subseries);   	
			});
			console.log(series);
			$.plot("#linegraph2",series,{
				series:{
					
				},
				xaxis:{mode:"category",ticks:[
					[0, "January"],
					[1, "February"],
					[2, "March"],
					[3, "April"],
					[4, "May"],
					[5, "June"],
					[6, "July"],
					[7, "August"],
					[8, "September"],
					[9, "October"],
					[10, "November"],
					[11, "December"],
				], tickLength:1}});
		},'json');
				
				
		
		$.get("php/initchart.php",{request:'initchart',type:"income"},function(data){
			console.log(data);
			var series=[];
			$.each(data,function(key, val){
				var subseries = {};
					subseries.label = key;
					subseries.data = val;
					series.push(subseries);   	
			});
			
			var d1 = [];
			for (var i = 0; i < 32; i += i+0.5) {
				d1.push([i, Math.cos(i)]);
			
			}	
			var d2 = [];
			for (var i = 0; i < 32; i += 0.5) {
				d2.push([i, Math.sin(i)]);
			
			}
			console.log(series);
			$.plot("#linegraph", [ d1,d2]);
		
		},'json');
				
};


function makeChart(ids,types){
	
		var delay=1000; //1 second
		var id = '#';
		id = id.concat(ids);
		console.log(ids);
	if(types=='expense'){
	console.log(id);

	$.get("php/initchart.php",{request:'initchart',type:'expense'},function(data){
			console.log(data);
			var series=[];
			$.each(data,function(key, val){
				var subseries = {};
					subseries.label = key;
					subseries.data = val;
					series.push(subseries);   	
			});
			console.log(series);
		
			
				$.plot(id,series,{
				series:{
					bars:{
						show:true, barWidth:0.15,order:1
					}
				},
				xaxis:{mode:"category",ticks:[
					[0, "January"],
					[1, "February"],
					[2, "March"],
					[3, "April"],
					[4, "May"],
					[5, "June"],
					[6, "July"],
					[7, "August"],
					[8, "September"],
					[9, "October"],
					[10, "November"],
					[11, "December"],
				], tickLength:1}});
				

		},'json');
		}
		
		if(types=='income'){
			$.get("php/initchart.php",{request:'initchart',type:"income"},function(data){
			console.log(data);
			var series=[];
			$.each(data,function(key, val){
				var subseries = {};
					subseries.label = key;
					subseries.data = val;
					series.push(subseries);   	
			});
			console.log(series);
			$.plot(id,series,{
				series:{
					
				},
				xaxis:{mode:"category",ticks:[
					[0, "January"],
					[1, "February"],
					[2, "March"],
					[3, "April"],
					[4, "May"],
					[5, "June"],
					[6, "July"],
					[7, "August"],
					[8, "September"],
					[9, "October"],
					[10, "November"],
					[11, "December"],
				], tickLength:1}});
		},'json');
				
			
		};
	
}

			
