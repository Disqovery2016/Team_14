

#include <ESP8266WiFi.h>

const char* ssid     = "Celkon A.R 45";
const char* password = "8341769092";

const char* host = "v16he2v4.esy.es";
String url;
int weight;

void setup() {
  Serial.begin(115200);
  delay(10);
pinMode(16,OUTPUT);
pinMode(5,OUTPUT);
pinMode(4,OUTPUT);
pinMode(0,OUTPUT);

digitalWrite(16,HIGH);
digitalWrite(5,HIGH);
digitalWrite(4,HIGH);
digitalWrite(0,HIGH);

  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
  
  WiFi.begin(ssid, password);
  
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");  
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}


int value = 0;

void loop() {
  delay(5000);
  ++value;

  int b1=digitalRead(16);
    int b2=digitalRead(5);
      int b3=digitalRead(4);
        int b4=digitalRead(0);




  while(Serial.available()>0)
{
 weight = Serial.read()-48;
Serial.print(weight);


  
}

  Serial.print("connecting to ");
  Serial.println(host);
  
  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
    return;
  }

  String url = "/set.php?user=83417&weight=";
  url += weight;
  
  
  
  Serial.print("Requesting URL: ");
  Serial.println(url);
  
  client.print(String("GET ") + url + " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" + 
               "Connection: close\r\n\r\n");
  unsigned long timeout = millis();
  while (client.available() == 0) {
    if (millis() - timeout > 5000) {
      Serial.println(">>> Client Timeout !");
      client.stop();
      return;
    }
  }
  
  while(client.available()){
    String line = client.readStringUntil('\r');


    Serial.print(line);
  }

  
 
  
  Serial.println();
  Serial.println("closing connection");
}

