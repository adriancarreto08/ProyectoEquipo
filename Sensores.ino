/*
* ESP32
* Librerias WiFi, HTTPClient
* Codigo origianl by Rui Santos
*/

#include <WiFi.h>
#include <HTTPClient.h>
#include "DHT.h"
#define DHTPIN 4 // Pin D4
#define DHTTYPE DHT11

const char* ssid     = "CLASES"; //Red local
const char* password = "Berrendos-05"; //Contraseña

//URL o Dominio con endpoint 
String serverName = "http://195.165.13.145/espPost";
DHT dht(DHTPIN, DHTTYPE);

// Variables de control para el tiempo
unsigned long lastTime = 0;
unsigned long timerDelay = 15000;
float humedad;
float temperatura;
float indice;

void setup() {
  Serial.begin(115200); 

  WiFi.begin(ssid, password);
  Serial.println("Conectado");
  while(WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Conectado a WiFi Ip: ");
  Serial.println(WiFi.localIP());
}

void loop() {
  //Enviar una solicitud HTTP cada timerDelay(valor)
  if ((millis() - lastTime) > timerDelay) {
    if(WiFi.status()== WL_CONNECTED){
      WiFiClient client;
      HTTPClient http;

      http.begin(client, serverName);

      // HTTP POST Specify content-type header
      http.addHeader("Content-Type", "application/x-www-form-urlencoded");
      // Data to send with HTTP POST
      delay(2000);
      humedad = dht.readHumidity();
      temperatura = dht.readTemperature();
      float indice = dht.computeHeatIndex(temperatura, humedad, false);
      
      String httpRequestData = "temperatura=" + String(temperatura)+ "&humedad=" + String(humedad)+"&indice=" + String(indice);

      //HTTP POST request
      int httpResponseCode = http.POST(httpRequestData);

      if (httpResponseCode>0) {
        Serial.print("HTTP Response code: ");
        Serial.println(httpResponseCode);
      }
      else {
        Serial.print("Error code: ");
        Serial.println(httpResponseCode);
      }
      // Liberar recursos
      http.end();
    }
    else {
      Serial.println("WiFi Desconectado");
    }
    lastTime = millis();
  }
 String url = "/espPost";
   url += "?humedad=";
   url += humedad;
   url += "&temperatura=";
   url += temperatura;
   url += "&indice=";
   url += indice;
  
}
