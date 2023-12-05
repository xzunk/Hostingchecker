const resultElement = document.getElementById('result');
const ipAddressInput = document.getElementById('ip_address');

function checkIP() {
  const ipAddress = ipAddressInput.value;

  fetch(`get_ip_details.php?ip=${ipAddress}`)
    .then(response => response.json())
    .then(response => {
      resultElement.innerHTML = `
        <br>
        Status: ${response.status}
        <br><b>IP Query:</b> ${response.query}
        <br><b>ISP:</b> ${response.isp}
        <br><b>Country:</b> ${response.country}
        <br><b>Country Code:</b> ${response.countryCode}
        <br><b>Region Name:</b> ${response.regionName}
        <br><b>City:</b> ${response.city}
        <br><b>ZIP:</b> ${response.zip}
        <br><b>Latitude:</b> ${response.lat}
        <br><b>Longitude:</b> ${response.lon}
        <br><b>Timezone:</b> ${response.timezone}
        <br><b>Organization:</b> ${response.org}
        <br><b>AS:</b> ${response.as}
      `;
    })
    .catch(error => {
      console.log('Error:', error);
    });
}

function clearInput() {
  ipAddressInput.value = '';
}

ipAddressInput.addEventListener('keydown', event => {
  if (event.key === 'Enter') {
    event.preventDefault();
    checkIP();
  }
});

window.addEventListener('DOMContentLoaded', () => {
  fetch('https://api.ipify.org?format=json')
    .then(response => response.json())
    .then(data => {
      ipAddressInput.value = data.ip;
      checkIP();
    })
    .catch(error => {
      console.log('Error:', error);
    });
});

