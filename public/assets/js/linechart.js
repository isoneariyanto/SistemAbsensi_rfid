// Chart Options
const options = {
	chart: {
		height: 250,
		width: '100%',
		type: 'line',
		background: '#fff',
		foreColor: '#333'
	},
	series: [{
		name: 'Heartbeat',
		data: [223,123,533,512,324,958,452]
	}],
	xaxis: {
		categories: [
			'son',
			'mon',
			'tue',
			'wed',
			'thur',
			'frid',
			'sat'
		]
	},
	// fill:{
	// 	colors: ['#A10717']
	// },
	// plotOptions:{
	// 	bar:{
	// 		horizontal: false
	// 	}
	// },
	// dataLabels:{
	// 	enabled: false
	// },
	title:{
		text: 'Hearbeat Chart Value',
		align: 'center',
		margin: 20,
		offsetY: 20,
		style:{
			fontSize: '15pt',
		}
	}
};

// init chart
const chart = new ApexCharts(document.querySelector('#heartbeatChart'), options);

// Render chart
chart.render();

// Event Method
// document.querySelector('button').addEventListener('click', () => 
// 	chart.updateOptions({
// 		chart: {
// 				height: 250,
// 				width: '100%',
// 				type: 'line',
// 				background: '#fff',
// 				foreColor: '#333'
// 			},
// 			series: [{
// 				name: 'Heartbeat',
// 				data: [223,123,533,512,324,958,452]
// 			}],
// 			xaxis: {
// 				categories: [
// 					'son',
// 					'mon',
// 					'tue',
// 					'wed',
// 					'thur',
// 					'frid',
// 					'sat'
// 				]
// 			},
// 			fill:{
// 				colors: ['#A10717']
// 			},
// 			plotOptions:{
// 				line:{
// 					horizontal: false
// 				}
// 			},
// 			dataLabels:{
// 				enabled: false
// 			},
// 			title:{
// 				text: 'Hearbeat Chart Value',
// 				align: 'center',
// 				margin: 20,
// 				offsetY: 20,
// 				style:{
// 					fontSize: '15pt',
// 				}
// 			}
// 	})
// );