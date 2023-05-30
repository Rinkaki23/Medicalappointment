window.onload = function() {
	statPhilippines();
	loadDataCountries();
}

function statPhilippines() {
	fetch('https://disease.sh/v2/countries/philippines?yesterday=true&strict=true')
	.then(function(resp) { return resp.json() })
	.then(function(data) {
		let todayCase = data.todayCases;
		let todayDeaths = data.todayDeaths;
		let confirmedCases = data.cases;
		let confirmedDeaths = data.deaths;
		let confirmedRecovered = data.recovered;

		document.getElementById('newcase').innerHTML = todayCase.toLocaleString('en');
		document.getElementById('newdeaths').innerHTML = todayDeaths.toLocaleString('en');
		document.getElementById('cases').innerHTML = confirmedCases.toLocaleString('en');
		document.getElementById('deaths').innerHTML = confirmedDeaths.toLocaleString('en');
		document.getElementById('recover').innerHTML = confirmedRecovered.toLocaleString('en');

	})
	.catch(function() {
		console.log("error");
	})
	setTimeout(statPhilippines, 43200000) // update every 12 hours
}

/* -------------------- All data on table -----------------------------*/

let countryData = [];

function loadDataCountries(){
    function statWorld(){
    fetch('https://disease.sh/v2/countries')
    .then(function(resp) {return resp.json()})
    .then(function(data){
        for(let i = 0; i < data.length; i++){
            countryData.push(data[i]);
        }
        loadTableData(countryData);
    })
    .catch(function(){
        console.log("error")
    })
    //setTimeout(getCovidStats, 43200000);
}
statWorld();
}

function loadTableData(countryData){
    const tableBody = document.getElementById('tableData');
    let dataHtml = '';
    
    for(let country of countryData){
        dataHtml += `<tr>
        <td><img src="${country.countryInfo.flag}" width="60" height="40"/></td>
        <td>${country.country}</td>
        <td>${country.cases}</td>
        <td>${'+' + country.todayCases}</td>
        <td>${country.deaths}</td>
        <td>${country.recovered}</td>
        </tr>`;
    }
    tableBody.innerHTML = dataHtml;
}

/* -------------------- All data on table -----------------------------*/