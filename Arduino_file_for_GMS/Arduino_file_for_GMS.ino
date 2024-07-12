#include <Wire.h>
#include <SoftwareSerial.h>
#include <ArduinoJson.h>
#include <DHT.h>
#define dht_apin A0
SoftwareSerial nodemcu(5, 6); //attach pin D3 Arduino to pin Trig of HC-SR04

DHT dht(dht_apin,DHT11);

long duration; // variable for the duration of sound wave travel
int distance; // variable for the distance measurement
double hum_obj;
double temp_obj;
double gas_obj;
float temp;
float hum;
float gas;


void setup()
  {
  Serial.begin(9600);
  delay(500);
  nodemcu.begin(9600);
  Serial.println("Temp , humidity and Gas");
  delay(1000);
  //Initialize MLX90614
}

void loop()
{
  //Reading room temperature and object temp
  //for reading Fahrenheit values, use
  //mlx.readAmbientTempF() , mlx.readObjectTempF() )

  //for Readinfg the data of the DHT sensor.
  hum_obj = dht.readHumidity();
  temp_obj = dht.readTemperature();
  double mos_obj = (hum_obj/temp_obj)*5;
  gas_obj  = analogRead(1);
  double gas_con  = gas_obj/10;

 


  //Serial Monitor
  Serial.print(" Humidity = ");
  Serial.println(hum_obj);
  Serial.print("tempreture = ");
  Serial.println(temp_obj);
  Serial.print("Moisture = ");
  Serial.println(mos_obj);
  Serial.print(" Gas = ");
  Serial.println(gas_con);
  StaticJsonBuffer<1000> jsonBuffer;
  JsonObject& data = jsonBuffer.createObject();


  //Assign collected data to JSON Object
  data["hum"] = hum_obj;
  data["temp"] = temp_obj;
  data["gas"] = gas_obj;
  //Send data to NodeMCU
  data.printTo(nodemcu);
  jsonBuffer.clear();
  delay(1000);
}
void fun(){
  /*!
 *  @file DHT.h
 *
 *  This is a library for DHT series of low cost temperature/humidity sensors.
 *
 *  You must have Adafruit Unified Sensor Library library installed to use this
 * class.
 *
 *  Adafruit invests time and resources providing this open source code,
 *  please support Adafruit andopen-source hardware by purchasing products
 *  from Adafruit!
 *
 *  Written by Adafruit Industries.
 *
 *  MIT license, all text above must be included in any redistribution
 */

#ifndef DHT_H
#define DHT_H

#include "Arduino.h"

/* Uncomment to enable printing out nice debug messages. */
//#define DHT_DEBUG

#define DEBUG_PRINTER                                                          \
  Serial /**< Define where debug output will be printed.                       \
          */

/* Setup debug printing macros. */
#ifdef DHT_DEBUG
#define DEBUG_PRINT(...)                                                       \
  { DEBUG_PRINTER.print(__VA_ARGS__); }
#define DEBUG_PRINTLN(...)                                                     \
  { DEBUG_PRINTER.println(__VA_ARGS__); }
#else
#define DEBUG_PRINT(...)                                                       \
  {} /**< Debug Print Placeholder if Debug is disabled */
#define DEBUG_PRINTLN(...)                                                     \
  {} /**< Debug Print Line Placeholder if Debug is disabled */
#endif

/* Define types of sensors. */
#define DHT11 11  /**< DHT TYPE 11 */
#define DHT12 12  /**< DHY TYPE 12 */
#define DHT22 22  /**< DHT TYPE 22 */
#define DHT21 21  /**< DHT TYPE 21 */
#define AM2301 21 /**< AM2301 */

#if defined(TARGET_NAME) && (TARGET_NAME == ARDUINO_NANO33BLE)
#ifndef microsecondsToClockCycles
/*!
 * As of 7 Sep 2020 the Arduino Nano 33 BLE boards do not have
 * microsecondsToClockCycles defined.
 */
#define microsecondsToClockCycles(a) ((a) * (SystemCoreClock / 1000000L))
#endif
#endif

/*!
 *  @brief  Class that stores state and functions for DHT
 */
class DHT {
public:
  DHT(uint8_t pin, uint8_t type, uint8_t count = 6);
  void begin(uint8_t usec = 55);
  float readTemperature(bool S = false, bool force = false);
  float convertCtoF(float);
  float convertFtoC(float);
  float computeHeatIndex(bool isFahrenheit = true);
  float computeHeatIndex(float temperature, float percentHumidity,
                         bool isFahrenheit = true);
  float readHumidity(bool force = false);
  bool read(bool force = false);

private:
  uint8_t data[5];
  uint8_t _pin, _type;
#ifdef __AVR
  // Use direct GPIO access on an 8-bit AVR so keep track of the port and
  // bitmask for the digital pin connected to the DHT.  Other platforms will use
  // digitalRead.
  uint8_t _bit, _port;
#endif
  uint32_t _lastreadtime, _maxcycles;
  bool _lastresult;
  uint8_t pullTime; // Time (in usec) to pull up data line before reading

  uint32_t expectPulse(bool level);
};

/*!
 *  @brief  Class that defines Interrupt Lock Avaiability
 */
class InterruptLock {
public:
  InterruptLock() {
#if !defined(ARDUINO_ARCH_NRF52)
    noInterrupts();
#endif
  }
  ~InterruptLock() {
#if !defined(ARDUINO_ARCH_NRF52)
    interrupts();
#endif
  }
};

#endif
}
