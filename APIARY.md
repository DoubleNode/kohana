FORMAT: 1A
HOST: http://api.madstudios.com

# MADStudios API
API Documentation for the MADStudios Project  
> **KEY:**  

> 1. All times will be considered GMT
> 2. Times that use just hours need to still be sent as timestamps. **DATE** portion of sting will be ignored on display.
> 2. All curency must be US curreny in cents. $1.00 = 100
> 3. Week days are retuned 0 - 6. 0 = Sunday, 6 = Saturday

# Group @TODO's
> 1. Build /Photos/Upload POST endpoint
> 2. Booking Endpoint
> 3. Complete Location Search Filters
> 4. Complete /Mockdata. Add lorempixel.com photos
> 5. Change INT ID to VARCHAR(32) UUID and require

# Group @NEEDS
> 1. Need full list of Building Types
> 2. Need full list of Location Types
> 3. Need full list of Equipment Types

# GROUP @CONCERNS
> 1. I don't like returning an array of data when only one object is expected (Locations/People...)


# Group Mockdata
Creates Mockdata for the **MAD Studios API**

## Mockdata Collection [/Mockdata]

### Ceate Mock Data [POST]

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.4128,
                "context": "http://api.madstudio.com/Mockdata",
                "code": 200,
                "count": 3,
                "timestamp": {
                    "date": "2014-05-07 01:31:59",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1
            },
            "data": [
                {
                
                }
            ]
        }
        
# Group People
People related resources of the **MAD Studios API**

## People Collection [/People]

### List all people [GET]

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.4128,
                "context": "http://api.madstudio.com/People",
                "code": 200,
                "count": 3,
                "timestamp": {
                    "date": "2014-05-07 01:31:59",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":25
            },
            "data": [
                {
                    "person": {
                        "id": "1",
                        "firstname": "Bob",
                        "lastname": "Smith",
                        "title": "Sound Engineer",
                        "email": "bob@email.com",
                        "phone": "123-555-1234",
                        "photo": {
                            "id": "1",
                            "path": "http://lorempixel.com/1024/768/technics/?1",
                            "added" : 1398311635,
                            "updated" : 1398311635
                        },
                        "updated": "1398311635",
                        "added": "1398311635"
                    }
                },
                {
                    "person": {
                        "id": "2",
                        "firstname": "Mike",
                        "lastname": "Watt",
                        "title": "Owner",
                        "email": "mike@email.com",
                        "phone": "123-55-1234",
                        "photo": {
                            "id": "2",
                            "path": "http://lorempixel.com/1024/768/technics/?2",
                            "added" : 1398311635,
                            "updated" : 1398311635
                        }
                        "updated": "1398331635",
                        "added": "1398331635"
                    }
                },
                {
                    "person": {
                        "id": "3",
                        "firstname": "James",
                        "lastname": "Styles",
                        "title": "Owner",
                        "email": "james@email.com",
                        "phone": "123-444-1234",
                        "photo": {
                            "id": "3",
                            "path": "http://lorempixel.com/1024/768/people/?3",
                            "added" : 1398311635,
                            "updated" : 1398311635
                        },
                        "added": "1398351635"
                        "updated": "1398351635"
                    }
                }
            ]
        }

    
### Create a Person [POST]

+ Parameters
    + firstname (optional, string, `Greg`) ...  VARCHAR(45)
    + lastname (optional, string, `Holderman`) ...  VARCHAR(45)
    + email (optional, string, `greg@domain.com`) ...  VARCHAR(100)
    + title (optional, string, `Sound Engineer`) ...  VARCHAR(45)
    + phone (optional, string, `555-555-5555`) ...  VARCHAR(24)
    + photo (optional, string, `/path_to_photo???`) ...  ??????
    
+ Request (application/json)

        { 
            "firstname" : "Greg",
            "lastname" : "Holder",
            "title" : "Tech",
            "email" : "greg@email.com",
            "phone" : "222-222-2222" 
        }

+ Response 201 (application/json)

        {
            "meta": {
                "runtime": 0.3459,
                "context": "http://api.madstudio.com/People/1",
                "code": 201,
                "count": 1,
                "timestamp": {
                    "date": "2014-05-07 01:32:18",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":1
            },
            "data": {
                "person": {
                    "id": "4",
                    "firstname": "Greg",
                    "lastname": "Holder",
                    "title": "Tech",
                    "email": "greg@email.com",
                    "phone": "222-222-2222",
                    "photo": {
                        "id": "5"
                        "path": "http://lorempixel.com/1024/768/technics/?4",
                        "added": "1398311635",
                        "updated": "1398311635"
                    },
                    "added": "1398311635",
                    "updated": "1398311635"
                }
            }
        }

## People [/People/{id}]
### Update a Person [PUT]

+ Parameters
    + firstname (optional, string, `Greg`) ...  VARCHAR(45)
    + lastname (optional, string, `Holderman`) ...  VARCHAR(45)
    + email (optional, string, `greg@domain.com`) ...  VARCHAR(100)
    + title (optional, string, `Sound Engineer`) ...  VARCHAR(45)
    + phone (optional, string, `555-555-5555`) ...  VARCHAR(24)
    + photo (optional, string, `/path_to_photo???`) ...  ??????
    
+ Request (application/json)

        { 
            "firstname": "Greg",
            "lastname" : "Holderman"
        }

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.3459,
                "context": "http://api.madstudio.com/People/1",
                "code": 200,
                "count": 1,
                "timestamp": {
                    "date": "2014-05-07 01:32:18",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":1
            },
            "data": {
                "person": {
                    "id": "4",
                    "firstname": "Greg",
                    "lastname": "Holderman",
                    "title": "Tech",
                    "email": "greg@email.com",
                    "phone": "222-222-2222",
                    "photo": {
                        "id": "5",
                        "path": "http://lorempixel.com/1024/768/technics/?4",
                        "added": "1398311635",
                        "updated": "1398311635"
                    }
                    "updated": "1398311635",
                    "added": "1398311635",
                    
                }
            }
        }
        
### Retrieve a Person [GET]
A single Person object with all its details

+ Parameters
    + id (required, number, `2`) ... Numeric `id` of the Person to perform action with. Has example value.

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.3459,
                "context": "http://api.madstudio.com/People/1",
                "code": 200,
                "count": 1,
                "timestamp": {
                    "date": "2014-05-07 01:32:18",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":1
            },
            "data": {
                "person": {
                    "id": "4",
                    "firstname": "Greg",
                    "lastname": "Holder",
                    "title": "Tech",
                    "email": "greg@email.com",
                    "phone": "222-222-2222",
                    "photo": {
                        "id": "5",
                        "path": "http://lorempixel.com/1024/768/technics/?4",
                        "added": "1398311635",
                        "updated": "1398311635"
                    }
                    "added": "1398311635",
                    "added": "1398311635"
                }
            }
        }

### Remove a Person [DELETE]
Deletes a single person

+ Parameters
    + id (required, number, `2`) ... Numeric `id` of the Person to perform action with. Has example value.

+ Response 200 (application/json)
    
        {
            "meta": {
                "runtime": 0.6138,
                "context": "http://api.madstudio.com/Person/1",
                "code": 200,
                "count": 0,
                "timestamp": {
                    "date": "2014-05-08 03:18:33",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":0
            },
            "data": [
                {

                }
            ]
        }

# Group Locations
Location related resources of the **MAD Studios API**

## Locations Collection [/Locations]

### List all locations [GET]
    
Filter Parameters
> 1. robust - Setting this flag will return extended information about a Location.  (optional, string)
> 2. type - Use this flag to filter the returned resutls. (recoding, dance) (optional, string)
> 3. date - Return only Locations OPEN on this day. (optional, unix timestamp)
> 4. location - Setting a GEOHASH will return all locations near the GEOHASH. (optional, geohash)
> 5. open  - (optional, unix timestamp)
> 6. close - (optional, unix timestamp)
> 7. minprice - Price in US cents.  (optional, int, `100 = $1.00`)
> 8. maxprice - Price in US cents.   (optional, int, `100 = $1.00`)
> 9. verified - Returns only validated Locations. (optional, string, `TRUE`)
> 10. featured - Returns only featured Locations. (optional, string, `TRUE`)
    
+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.6138,
                "context": "http://api.madstudio.com/Locations",
                "code": 200,
                "count": 2,
                "timestamp": {
                    "date": "2014-05-08 03:18:33",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":25
            },
            "data": [
                {
                    "location": {
                        "id": "1",
                        "name": "The Panhandle House",
                        "address": "313 N. Locust St.",
                        "address2": null,
                        "city": "Denton",
                        "state": "Tx",
                        "postalcode": "76201",
                        "country": "US",
                        "email": "marc@panhandlehouse.com",
                        "phone": "940-349-9229",
                        "website": "www.panhandlehouse.com",
                        "geohash": "dq0ej9b8vp9de",
                        "about": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu dui dolor. Ut molestie luctus placerat. Morbi congue mattis enim a congue. Etiam suscipit orci mattis augue vehicula, a aliquet lacus facilisis. Donec nisl urna, venenatis lacinia erat sed, venenatis suscipit metus",
                        "hourly_price": "2000",
                        "service_fee": "3000",
                        "turn_time": "1440",
                        "photo": {
                            "id": "1",
                            "path": "http://lorempixel.com/1024/768/technics/?1",
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        "location_type": [
                            {
                                "id": 1
                                "title": "Recording Studio",
                                "added": 1400256035,
                                "updated": 1400256035
                            }
                        ],
                        "building_type": [
                            {
                                "id": "1",
                                "title": "Business",
                                "added": 1400256035,
                                "updated": 1400256035
                            }
                        ],
                        "agent": {
                            "id": "1",
                            "firstname": "Bob",
                            "lastname": "Smith",
                            "title": "Sound Engineer",
                            "email": "bob@email.com",
                            "phone": "123-555-1234",
                            "photo": {
                                "id": "1",
                                "path": "http://lorempixel.com/1024/768/technics/?1",
                                "added": 1400256035,
                                "updated": 1400256035
                            },
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        "studio_hours": [
                            {
                                "id": "1",
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "1",
                                "added": "1398052567",
                                "updated": "1398052567",
                            },
                            {
                                "id": "2",
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "2",
                                "added": "1398052567",
                                "updated": "1398052567"
                            },
                            {
                                "id": "3",
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "3",
                                "added": "1398052567",
                                "updated": "1398052567"
                            },
                            {
                                "id": "4"
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "4",
                                "updated": "1398052567",
                                "added": "1398052567"
                            },
                            {
                                "id": "5",
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "5",
                                "updated": "1398052567",
                                "added": "1398052567"
                            }
                        ],
                        "rating": "70",
                        "reviews": [
                            {
                                "id": "1",
                                "person_id": "3",
                                "rating": "40",
                                "review": "It's OK"
                                "added": "1396410330",
                                "updated": "1396410330"
                            },
                            {
                                "id": "2",
                                "person_id": "2",
                                "location_id": "1",
                                "rating": "100",
                                "review": "Amazing Staff"
                                "added": "1396410330",
                                "updated": "1396410330"
                            }
                        ],
                        "equipment": [
                            {
                                "id": "1",
                                "title": "Vintage Neve 8058",
                                "quantity": "1",
                                "equipment_type": [
                                    {
                                        "id" : 1,
                                        "title" : "Console",
                                        "added" : 1396410330,
                                        "updated" 1396410330: 
                                    }
                                ],
                                "about": "All Discrete Amps 28 Inputs, 52 Channels on Mix (2) 32264a Compressor / Limiters Uptown 990 Moving Fader Automation",
                                "updated": "1397102362",
                                "added": "1397102362"
                            },
                            {
                                "id": "2",
                                "title": "Pro Tools HD3",
                                "quantity": "1",
                                "equipment_type": [
                                    {
                                        "id" : 1,
                                        "title" : "Recorders",
                                        "added" : 1396410330,
                                        "updated" 1396410330: 
                                    }
                                ],
                                "about": "32 channels of Apogee I/O - Apogee AD16-X & DA-16X Converters - Apogee Big Ben Master Clock - Dual 2.6Ghz Intel based Mac Pro - Pro Tools version 7.3 - Extensive plug-ins and production software"
                                "updated": "1397102562",
                                "added": "1397102562"
                            }
                        ],
                        "added": "1397015532",
                        "updated": "1397015581"
                    }
                },
                {
                    "location": {
                        "id": "2",
                        "name": "Tree Sound Studions",
                        "address": "4610 Peachtree Industrial Blvd",
                        "address2": null,
                        "city": "Norcross",
                        "state": "Ga",
                        "postalcode": "30071",
                        "country": "US",
                        "email": "mali@treesoundstudios.com",
                        "phone": "940-349-9229",
                        "website": "www.treesoundstudios.com",
                        "geohash": "9mudq5gq1x5tg",
                        "about": "Nullam sit amet lectus luctus neque vestibulum tristique ac quis erat. Donec lacinia blandit nisl ut iaculis. Nunc vitae diam sem. Duis est turpis, cursus non leo vitae, volutpat ultricies diam. Aliquam consectetur mauris eu felis euismod pulvinar. Donec ac augue at ipsum suscipit sodales vitae ac nisl.",
                        "hourly_price": "2000",
                        "service_fee": "2000",
                        "turn_time": "1440",
                        "photo": {
                            "id": "2",
                            "path": "http://lorempixel.com/1024/768/technics/?2",
                            "added": 1398484578,
                            "updated": 1398484578
                        },
                        "location_type": [
                            {
                                "id": 2
                                "title": "Dance Studio",
                                "added": 1400256035,
                                "updated": 1400256035
                            }
                        ],
                        "building_type": [
                            {
                                "id": 2,
                                "title": "Stand Alone Building",
                                "added": 1400256035,
                                "updated": 1400256035
                            },
                        "agent": {
                            "id": "2",
                            "firstname": "Mike",
                            "lastname": "Watt",
                            "title": "Owner",
                            "email": "mike@email.com",
                            "phone": "123-123-1234",
                            "photo": {
                                "id": "2",
                                "path": "http://lorempixel.com/1024/768/technics/?2",
                                "added": 1398484578,
                                "updated": 1398484578
                            },
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        "studio_hours": [
                            {
                                "id": "6"
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "1",
                                "added": "1398484578",
                                "updated": "1398484578"
                            },
                            {
                                "id": "7",
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "2",
                                "added": "1398484578",
                                "updated": "1398484578"
                            },
                            {
                                "id": "8",
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "3",
                                "added": "1398484578",
                                "updated": "1398484578"
                            },
                            {
                                "id": "9"
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "4",
                                "added": "1398484578",
                                "updated": "1398484578"
                            },
                            {
                                "id": "10"
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "5",
                                "added": "1398484578",
                                "updated": "1398484578"
                            }
                        ],
                        "rating": "55",
                        "reviews": [
                            {
                                "id": "3",
                                "person_id": "5",
                                "location_id": "2",
                                "rating": "85",
                                "review": "Good Stuff"
                                "added": "1396410330",
                                "updated": "1396410330"
                            },
                            {
                                "id": "4",
                                "person_id": "6",
                                "location_id": "2",
                                "rating": "25",
                                "review": "Bad Stuff"
                                "added": "1396410330",
                                "updated": "1396410330"
                            }
                        ],
                        "equipment": [
                            {
                                "id": "1",
                                "title": "Vintage Neve 8058",
                                "quantity": "1",
                                "equipment_type": [
                                    {
                                        "id" : 1,
                                        "title" : "Console",
                                        "added" : 1396410330,
                                        "updated" 1396410330: 
                                    }
                                ],
                                "about": "All Discrete Amps 28 Inputs, 52 Channels on Mix (2) 32264a Compressor / Limiters Uptown 990 Moving Fader Automation",
                                "updated": "1397102362",
                                "added": "1397102362"
                            },
                            {
                                "id": "2",
                                "title": "Pro Tools HD3",
                                "quantity": "1",
                                "equipment_type": [
                                    {
                                        "id" : 1,
                                        "title" : "Recorders",
                                        "added" : 1396410330,
                                        "updated" 1396410330: 
                                    }
                                ],
                                "about": "32 channels of Apogee I/O - Apogee AD16-X & DA-16X Converters - Apogee Big Ben Master Clock - Dual 2.6Ghz Intel based Mac Pro - Pro Tools version 7.3 - Extensive plug-ins and production software"
                                "updated": "1397102562",
                                "added": "1397102562"
                            }
                        ],
                        "added": "1396756388",
                        "updated": "1396756388"
                    }
                }
            ]
        }


### Create a Location [POST]


+ Parameters
    + name (optional, string, `Peachtree Studios`) ...  VARCHAR(45)
    + address (optional, string, `123 Street`) ...  VARCHAR(45)
    + address2 (optional, string, `Suite 1`) ...  VARCHAR(100)
    + city (optional, string, `Dallas`) ...  VARCHAR(45)
    + state (optional, string, `Tx`) ...  VARCHAR(2) : use /States for full list.
    + postalcode (optional, string, `12345`) ...  VARCHAR(45)
    + country (optional, string, `Tx`) ...  VARCHAR(3) : Use /Countries for full list.
    + location_type_id (optional, int, `1`) ...  IN : Use /LocationTypes for full list.
    + building_type_id (optional, int, `1`) ...  INT : Use /BuildingTypes for full list.
    + hourly_price (optional, int, `Dallas`) ...  INT : US Cents
    + phone (optional, string, `555-555-5555`) ...  VARCHAR(24)
    + email (optional, string, `studio@domain.com`) ...  VARCHAR(100)
    + website (optional, string, `www.domain.com`) ...  VARCHAR(254)
    + service_fee (optional, string, `555-555-5555`) ... INT : US Cents
    + turn_time (optional, string, `555-555-5555`) ...  ??????
    + about (optional, string, `_about_`) ...  LONGTEXT
    + equipment (optional, string, `_equipment_list_`) ...  LONGTEXT
    + agent (optional, object, `_person_object_`) ...  Person Object
    
+ Request (application/json)

        { 
            "name": "Universal Mastering Studio", 
            "address": "3400 Cahuenga Blvd.",
            "address2": "Building C",
            "city": "Los Angeles",
            "state": "CA",
            "postalcode": "90068",
            "country": "US",
            "website": "http://www.universalmastering.com/",
            "phone": "818.286.6233",
            "about": "UMS is part of the Universal Music Group family, with a studio located in Hollywood, California. Our veteran staff of world-class mastering engineers have worked with some of the industry's top recording artists and producers over the last 30 years.",
            "agent":
                {
                    "firstname": "Nick",
                    "lastname": "Dofflemyer",
                    "title": "Engineer",
                    "phone": "818-286-6233",
                    "email": "nick.d@umusic.com"
                }
            ,
            "hours":[
                {
                    "open": "1400115594",
                    "close": "1400108409",
                    "day": "3"
                },
                {
                    "open": "1400115594",
                    "close": "1400108409",
                    "day": "4"
                },
                {
                    "open": "1400115594",
                    "close": "1400108409",
                    "day": "5"
                },
                {
                    "open": "1400115594",
                    "close": "1400108409",
                    "day": "6"
                },
                {
                    "open": "1400115594",
                    "close": "1400108409",
                    "day": "7"
                }
            ],
            "equipment":[
                {
                    "title":"Microphones",
                    "quantity" : 2
                },
                {
                    "title":"Drum Riser",
                    "quantity" : 1
                },
                {
                    "title":"Monitors",
                    "quantity" : 4
                }
            ],
            "location_type_id": 2,
            "building_type_id": 2
        }

+ Response 201 (application/json)

        {
            "meta": {
                "runtime": 0.6138,
                "context": "http://api.madstudio.com/Locations",
                "code": 201,
                "count": 1,
                "timestamp": {
                    "date": "2014-05-08 03:18:33",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":1
            },
            "data": {
                "location": {
                    "id": 4,
                    "name": "Universal Mastering Studio" 
                    "address": "3400 Cahuenga Blvd.",
                    "address2": "Building C",
                    "city": "Los Angeles",
                    "state": "CA",
                    "postalcode": "90068",
                    "country": "US",
                    "email": null,
                    "phone": null,
                    "website": "http://www.universalmastering.com/",
                    "phone": "818.286.6233",
                    "longitude": "33.972018",
                    "latitude": "-84.18514390000001",
                    "geohash": "9q5f4v7q1ep85",
                    "about": "UMS is part of the Universal Music Group family, with a studio located in Hollywood, California. Our veteran staff of world-class mastering engineers have worked with some of the industry's top recording artists and producers over the last 30 years.",
                    "hourly_price": null,
                    "service_fee": null,
                    "turn_time": null,
                    "photo": {
                        "path": null,
                        "id": null,
                        "added": 0,
                        "updated": 0
                    },
                    "location_type": [
                        {
                            "id": "2",
                            "title": "Dance Studio",
                            "added": 1400256035,
                            "updated": 1400256035
                        }
                    ],
                    "building_type": [
                        {
                            "id": "2",
                            "title": "Stand Alone Building",
                            "added": 1400256035,
                            "updated": 1400256035
                        }
                    ],
                    "agent": {
                        "id": "7",
                        "firstname": "Nick ",
                        "lastname": "Dofflemyer",
                        "title": "Engineer",
                        "email": "nick.d@umusic.com",
                        "phone": "818-286-6233",
                        "photo": {
                            "path": null,
                            "id": null,
                            "added": 0,
                            "updated": 0
                        }
                        "updated": "1398331635",
                        "added": "1398331635",
                    },
                    "studio_hours": [
                        {
                            
                        }
                    ],
                    "rating": "0",
                    "reviews": [
                        {
                           
                        }
                    ],
                    "equipment": [
                        {
                           
                        }
                    ],
                    "added": "1396756388",
                    "updated": "1396756388"
                }
            }
        }

## Location [/Locations/{id}]
### Retrieve a Location [GET]

+ Parameters
    + id (required, number, `1`) ... Numeric `id` of the Location to perform action with. Has example value.
    
+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.6138,
                "context": "http://api.madstudio.com/Locations",
                "code": 201,
                "count": 1,
                "timestamp": {
                    "date": "2014-05-08 03:18:33",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":1
            },
            "data": {
                "location": {
                    "id": "2",
                    "name": "Tree Sound Studions",
                    "address1": "4610 Peachtree Industrial Blvd",
                    "address2": "",
                    "city": "Norcross",
                    "state": "GA",
                    "postcode": "30071",
                    "country": "US",
                    "location": "Norcross GA",
                    "location_type": [
                        {
                            id: "1",
                            title: "Recording Studio",
                            "added": 1400256035,
                            "updated": 1400256035
                        }
                    ],
                    "about": "Tree Sound Studios is a unique blend of vision, precision, and the desire to make great music. We provide our clients with an atmosphere designed to excite and inspire. Our accommodating staff prides itself on providing the individual attention that every recording artist needs. Detail, combined with technical expertise and dedication make Tree Sound Studios an ideal recording studio for audio projects of all levels. We are located just 20 minutes from Buckhead in Atlanta, GA, ask about our complimentary bio-diesel car service to take you to and from the studio.",
                    "building_type": [
                        {
                            "id": 1,
                            "title": "Business",
                            "added": 1400256035,
                            "updated": 1400256035
                        }
                    ],
                    "equipment": {
                            "id": 3,
                            "title": "Lawson L47 MKI (Original Gold) ",
                            "equipment_type": {
                                "id": 1,
                                "title": "Microphone",
                                "added": 1400256035,
                                "updated": 1400256035
                            },
                            "about": "",
                            "quantity": 1,
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        {
                            "id": 4,
                            "title": "Gefell UM92",
                            "equipment_type": {
                                "id": 1,
                                "title": "Microphone",
                                "added": 1400256035,
                                "updated": 1400256035
                            },
                            "about": "",
                            "quantity": 2,
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                    "hourly_price": "2000",
                    "agent": {
                        "id": 123,
                        "firstname": "Sammy",
                        "lastname": "Davis",
                        "email": "davis.sammy@ratpack.com",
                        "phone": "123-555-4444",
                        "title": "Facilities Manager",
                        "photo": {
                            "id": 99,
                            "path": "//media.madstudios.com/studios/1/123f93kdddlsdfkil4df.png",
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        "added": 1400256035,
                        "updated": 1400256035
                    },
                    "rating": "75.5",
                    "reviews": [
                        {
                            "id": 123,
                            "rating": 85,
                            "review": "Good Stuff",
                            "person_id": 2,
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        {
                            "id": 456,
                            "rating": 66,
                            "review": "Bad Stuff",
                            "person_id": 3,
                            "added": 1400256035,
                            "updated": 1400256035
                        }
                    ],
                    "phone": "940-349-9229",
                    "email": "mali@treesoundstudios.com",
                    "website": "www.treesoundstudios.com",
                    "geohash": "9mudq5gq1x5tg",
                    "profile_photo": {
                        "id": 453,
                        "path": "//media.madstudios.com/studios/2/asdf93kd0asdfklsdfasdf.png",
                        "added": 1400256035,
                        "updated": 1400256035
                    },
                    "hours": [
                        {
                            "id": "1",
                            "day": "1",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        {
                            "id": "1",
                            "day": "2",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        {
                            "id": "1",
                            "day": "3",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        {
                            "id": "1",
                            "day": "4",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        {
                            "id": "1",
                            "day": "5",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1400256035,
                            "updated": 1400256035
                        }
                    ],
                    "service_fee": "2000",
                    "turn_time": "1440",
                    "added": 1400256035,
                    "updated": 1400256035
                }
            }
        }

### Update a Location [PUT]

+ Parameters
    + name (optional, string, `Peachtree Studios`) ...  VARCHAR(45)
    + address (optional, string, `123 Street`) ...  VARCHAR(45)
    + address2 (optional, string, `Suite 1`) ...  VARCHAR(100)
    + city (optional, string, `Dallas`) ...  VARCHAR(45)
    + state (optional, string, `Tx`) ...  VARCHAR(2) : use /States for full list.
    + postalcode (optional, string, `12345`) ...  VARCHAR(45)
    + country (optional, string, `Tx`) ...  VARCHAR(3) : Use /Countries for full list.
    + location_type_id (optional, int, `1`) ...  IN : Use /LocationTypes for full list.
    + building_type_id (optional, int, `1`) ...  INT : Use /BuildingTypes for full list.
    + hourly_price (optional, int, `Dallas`) ...  INT : US Cents
    + phone (optional, string, `555-555-5555`) ...  VARCHAR(24)
    + email (optional, string, `studio@domain.com`) ...  VARCHAR(100)
    + website (optional, string, `www.domain.com`) ...  VARCHAR(254)
    + service_fee (optional, string, `555-555-5555`) ... INT : US Cents
    + turn_time (optional, string, `555-555-5555`) ...  ??????
    + about (optional, string, `_about_`) ...  LONGTEXT
    + equipment (optional, string, `_equipment_list_`) ...  LONGTEXT
    + agent (optional, object, `_person_object_`) ...  Person Object
    
+ Request (application/json)

        { 
            "firstname": "Greg",
            "lastname" : "Holderman"
        }

    
+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.6138,
                "context": "http://api.madstudio.com/Locations",
                "code": 201,
                "count": 1,
                "timestamp": {
                    "date": "2014-05-08 03:18:33",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":1
            },
            "data": {
                "location": {
                    "id": "2",
                    "name": "Tree Sound Studions",
                    "address1": "4610 Peachtree Industrial Blvd",
                    "address2": "",
                    "city": "Norcross",
                    "state": "GA",
                    "postcode": "30071",
                    "country": "US",
                    "location": "Norcross GA",
                    "location_type": [
                        {
                            "id": "1",
                            "title": "Recording Studio",
                            "added": 1396410330,
                            "updated": 1396410330
                        }
                    ],
                    "about": "Tree Sound Studios is a unique blend of vision, precision, and the desire to make great music. We provide our clients with an atmosphere designed to excite and inspire. Our accommodating staff prides itself on providing the individual attention that every recording artist needs. Detail, combined with technical expertise and dedication make Tree Sound Studios an ideal recording studio for audio projects of all levels. We are located just 20 minutes from Buckhead in Atlanta, GA, ask about our complimentary bio-diesel car service to take you to and from the studio.",
                    "building_type": [
                        {
                            "id": 1,
                            "title": "Business",
                            "added": 1396410330,
                            "updated": 1396410330
                        }
                    ],
                    "equipment": [
                        {
                            "id": 3,
                            "title": "Lawson L47 MKI (Original Gold) ",
                            "equipment_type": {
                                "id": 1,
                                "title": "Microphone",
                                "added": 1400256035,
                                "updated": 1400256035
                            },
                            "about": "",
                            "quantity": 1,
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        {
                            "id": 4,
                            "title": "Gefell UM92",
                            "equipment_type": {
                                "id": 1,
                                "title": "Microphone",
                                "added": 1400256035,
                                "updated": 1400256035
                            },
                            "about": "",
                            "quantity": 2,
                            "added": 1400256035,
                            "updated": 1400256035
                        }
                    ],
                    "hourly_price": "2000",
                    "agent": {
                        "id": 123,
                        "firstname": "Sammy",
                        "lastname": "Davis",
                        "email": "davis.sammy@ratpack.com",
                        "phone": "123-555-4444",
                        "title": "Facilities Manager",
                        "photo": {
                            "id": 99,
                            "path": "//media.madstudios.com/studios/1/123f93kdddlsdfkil4df.png",
                            "added": 1396410330,
                            "updated": 1396410330
                        },
                        "added": 1400256035,
                        "updated": 1400256035
                    },
                    "rating": "75.5",
                    "reviews": [
                        {
                            "id": 123,
                            "rating": 85,
                            "review": "Good Stuff",
                            "person_id": 2,
                            "added": 1396410330,
                            "updated": 1396410330
                        },
                        {
                            "id": 456,
                            "rating": 66,
                            "review": "Bad Stuff",
                            "person_id": 3,
                            "added": 1396410330,
                            "updated": 1396410330
                        }
                    ],
                    "phone": "940-349-9229",
                    "email": "mali@treesoundstudios.com",
                    "website": "www.treesoundstudios.com",
                    "geohash": "9mudq5gq1x5tg",
                    "profile_photo": {
                        "id": 453,
                        "path": "//media.madstudios.com/studios/2/asdf93kd0asdfklsdfasdf.png",
                        "added": 1396410330,
                        "updated": 1396410330
                    },
                    "hours": [
                        {
                            "id": "1",
                            "day": "1",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1396410330,
                            "updated": 1396410330
                        },
                        {
                            "id": "1",
                            "day": "2"
                            "open": "1396191600"
                            "close": "1396224000",
                            "added": 1396410330,
                            "updated": 1396410330
                        },
                        {
                            "id": "1",
                            "day": "3",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1396410330,
                            "updated": 1396410330
                        },
                        {
                            "id": "1",
                            "day": "4",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1396410330,
                            "updated": 1396410330
                        },
                        {
                            "id": "1",
                            "day": "5",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1396410330,
                            "updated": 1396410330
                        }
                    ],
                    "service_fee": "2000",
                    "turn_time": "1440",
                    "added": 1396410330,
                    "updated": 1396410330
                }
            }
        }

### Remove a Location [DELETE]

+ Parameters
    + id (required, number, `1`) ... Numeric `id` of the Location to perform action with. Has example value.
    
+ Response 200 (application/json)
    
        {
            "meta": {
                "runtime": 0.6138,
                "context": "http://api.madstudio.com/Locations/1",
                "code": 200,
                "count": 0,
                "timestamp": {
                    "date": "2014-05-08 03:18:33",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":0
            },
            "data": [

            ]
        }

# Group Hours
Hour related resources of the **MAD Studios API**

## Locations Collection [/Hours]


### Create an Hour [POST]
+ Request (application/json)

        {
            "open": "13961916000",
            "close": "13962240000",
            "day": "7",
            "location_id": "1" 
        }

+ Response 201 (application/json)

        {
            "meta": {
                "runtime": 0.1937,
                "context": "http://api.madstudio.dev/Hours/12",
                "code": 200,
                "count": 1,
                "timestamp": {
                    "date": "2014-05-12 05:01:01",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":1
            },
            "data": {
                "hour": {
                    "id": "12"
                    "open": "1396191600",
                    "close": "1396224000",
                    "day": "7",
                    "added": "1399870167",
                    "updated": 1399870861
                }
            }
        }

## Hours [/Hours/{id}]
### Update an Hour [PUT]

+ Parameters

    + day (required, in, `1`) ...  1 = Monday, 7 = Sunday
    + open (required, in, `1`) ...  GMT Timestamp
    + close (required, in, `1`) ...  GMT Timestamp

+ Request (application/json)

        {
            "open": "1396191600",
            "close": "1396224000",
            "day": "7",
            "location_id": "1" 
        }

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.1937,
                "context": "http://api.madstudio.dev/Equipment/99",
                "code": 200,
                "count": 1,
                "timestamp": {
                    "date": "2014-05-12 05:01:01",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":1
            },
            "data": {
                "hour": {
                    "id": "99"
                    "open": "1396191600",
                    "close": "1396224000",
                    "day": "7",
                    "added": "1399870167",
                    "updated": 1399870861
                }
            }
        }

### Remove an Hour [DELETE]

+ Parameters
    + id (required, number, `1`) ... Numeric `id` of the Hour to perform action with. Has example value.
    
+ Response 200 (application/json)
    
        {
            "meta": {
                "runtime": 0.6138,
                "context": "http://api.madstudio.com/Hours/1",
                "code": 200,
                "count": 0,
                "timestamp": {
                    "date": "2014-05-08 03:18:33",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":0
            },
            "data": [

            ]
        }
        
# Group Equipment
Equipment related resources of the **MAD Studios API**
@TODO EquipmentType resourse

## Equipment Collection [/Equipment]

### List all Equipment [GET]

Returns a alphabetical list of Equipment

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.1635,
                "context": "http://api.madstudios.com/Equipment",
                "code": 200,
                "count": 2,
                "timestamp": {
                    "date": "2014-05-14 19:44:45",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":25
            },
            "data": [
                {
                    "equipment": {
                        "title": "4-Track"
                    }
                },
                {
                    "equipment": {
                        "title": "9-Track"
                    }
                }
            ]
        }

### Create an Equipment Item [POST]
+ Parameters

    + title (required, string, `4-Track`) ... Short title of equipment
    + equipment_type_id (required, number, `1`) ... Use /EquipmentTypes for full list
    + about (required, longtext, `This is used in all our studios`) ... Detailed description of item.
    + quantity (required, int, `1`) ... The number of items in the studio.
    + location_id (required, int, `1`) ... Location ID associated with the Equipment
        
+ Request (application/json)

        {
            "title": "4-Track",
            "equipment_type_id": "1",
            "about": "Taskcam",
            "quantity": "2",
            "location_id": "1" 
        }

+ Response 201 (application/json)

        {
            "meta": {
                "runtime": 0.1937,
                "context": "http://api.madstudio.com/Equipment/99",
                "code": 200,
                "count": 1,
                "timestamp": {
                    "date": "2014-05-12 05:01:01",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":1
            },
            "data": {
                "equipment": {
                    "id": 99
                    "title": "4-Track",
                    "equipment_type": [
                        {
                            "id" : 1,
                            "title": "Console",
                            "added": 1399870167,
                            "updated": 1399870861
                        }
                    ],
                    "about": "Taskcam",
                    "quantity": 2,
                    "added": 1399870167,
                    "updated": 1399870861
                }
            }
        }

## Equipment [/Equipment/{id}]
### Update an Equipment Item [PUT]

+ Parameters

    + title (optional, string, `Mixing Board Pro`) ...  
    + equipment_type_id (optional, string, `1`) ...  Use the /EquipmentTypes resource for a full list.
    + about (optional, string, `Best Mixing Board In Town`) ...  Detailed description of equipment
    + quantity (optional, int, `1`) ...  How many do you have in your studio

+ Request (application/json)

        {
            "title": "4-Track Mixing Board",
            "about": "Taskcam Beta 2"
        }

+ Response 201 (application/json)

        {
            "meta": {
                "runtime": 0.1937,
                "context": "http://api.madstudio.dev/Equipment/99",
                "code": 200,
                "count": 1,
                "timestamp": {
                    "date": "2014-05-12 05:01:01",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":1
            },
            "data": {
                "equipment": {
                    "id": 99,
                    "title": "4-Track Mixing Board",
                    "about": "Taskcam Beta 2",
                    "quantity": 2,
                    "equipment_type": [
                        {
                            "id" : 1,
                            "title": "Console",
                            "added": 1399870167,
                            "updated": 1399870861
                        }
                    ],
                    "added": 1399870167,
                    "updated": 1399870861
                }
            }
        }
        
### Remove an Equipment [DELETE]

+ Parameters
    + id (required, number, `1`) ... Numeric `id` of the Equipment to perform action with. Has example value.
    
+ Response 200 (application/json)
    
        {
            "meta": {
                "runtime": 0.6138,
                "context": "http://api.madstudio.com/Equipment/1",
                "code": 200,
                "count": 0,
                "timestamp": {
                    "date": "2014-05-08 03:18:33",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1
            },
            "data": [

            ]
        }
        
# Group Location Types
Location Types related resources of the **MAD Studios API**

## Location Type Collection [/Locations/Types]

### List all Location Types [GET]

Alphabetical List of Location Types

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.1635,
                "context": "http://api.madstudios.com/LocationsTypes",
                "code": 200,
                "count": 3,
                "timestamp": {
                    "date": "2014-05-14 19:44:45",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":25
            },
            "data": [
                {
                    "type": {
                        "id": 2,
                        "title": "Dance Studio",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": 1,
                        "title": "Recording Studio",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": 3,
                        "title": "Other Studio",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                }
            ]
        }
        
# Group Building Types
Building Types related resources of the **MAD Studios API**

## Building Type Collection [/Buildings/Types]

### List all Building Types [GET]

Alphabetical List of Building Types

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.1635,
                "context": "http://api.madstudios.com/BuildingTypes",
                "code": 200,
                "count": 3,
                "timestamp": {
                    "date": "2014-05-14 19:44:45",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":25
            },
            "data": [
                {
                    "type": {
                        "id": 1,
                        "title": "Business",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": 4,
                        "title": "House",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": 2,
                        "title": "Stand Alone Bussiness",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                }
            ]
        }
        
# Group Equipment Types
Equipment Types related resources of the **MAD Studios API**

## Equipment Type Collection [/Equipment/Types]

### List all Equipment Types [GET]

Alphabetical List of Equipment Types

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.1635,
                "context": "http://api.madstudios.com/EquipmentTypes",
                "code": 200,
                "count": 3,
                "timestamp": {
                    "date": "2014-05-14 19:44:45",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":25
            },
            "data": [
                {
                    "type": {
                        "id": 1,
                        "title": "Console",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": 3,
                        "title": "Microphones",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": 2,
                        "title": "Recorders",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                }
            ]
        }
        
# Group States
States related resources of the **MAD Studios API**

## States Collection [/States]

### List all States [GET]

Alphabetical List of States

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.1635,
                "context": "http://api.madstudios.com/States",
                "code": 200,
                "count": 3,
                "timestamp": {
                    "date": "2014-05-14 19:44:45",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":25
            },
            "data": [
                {
                    "type": {
                        "id": 1,
                        "code": "AK",
                        "title": "Alaska",
                        "region": "6",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": 2,
                        "code": "AL",
                        "title": "Alabama",
                        "region": "3",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": 3,
                        "code": "AR",
                        "title": "Arkansas",
                        "region": "3",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                }
            ]
        }
   
# Group State Regions
State Regions related resources of the **MAD Studios API**

## States Regions Collection [/States/Regions]

### List all State Regions [GET]

Alphabetical List of State Regions

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.1635,
                "context": "http://api.madstudios.com/StateRegions",
                "code": 200,
                "count": 3,
                "timestamp": {
                    "date": "2014-05-14 19:44:45",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":25
            },
            "data": [
                {
                    "type": {
                        "id": 7,
                        "title": "International",,
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": 2,
                        "title": "Mid Atlantic",,
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": 4,
                        "title": "Midwest",,
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                }
            ]
        }
    
## States Regions with Region States [/States/Regions?robust=true]

### List all State Regions [GET]

Use the ?robust=true flag to include Region States in response

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.1635,
                "context": "http://api.madstudios.com/StateRegions",
                "code": 200,
                "count": 3,
                "timestamp": {
                    "date": "2014-05-14 19:44:45",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":25
            },
            "data": [
                {
                    "type" : {
                        "id": 7,
                        "title": "International",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                    "type": {
                        "id": 2,
                        "title": "Mid Atlantic",
                        "states": [
                            {
                                "title": "Iowa",
                                "code": "IA",
                                "region_id": "4",
                                "id": "13",
                                "added": 1399870167,
                                "updated": 1399870167
                            },
                            {
                                "title": "Illinois",
                                "code": "IL",
                                "region_id": "4",
                                "id": "15",
                                "added": 1399870167,
                                "updated": 1399870167
                            },
                            {
                                "title": "Indiana",
                                "code": "IN",
                                "region_id": "4",
                                "id": "16",
                                "added": 1399870167,
                                "updated": 1399870167
                            },
                            {
                                "title": "Kansas",
                                "code": "KS",
                                "region_id": "4",
                                "id": "17",
                                "added": 1399870167,
                                "updated": 1399870167
                            }
                        ]
                },
                {
                    "type": {
                    "id": 4,
                    "title": "Midwest", 
                    "states": [
                        {
                            "id": "7",
                            "code": "CT",
                            "title": "Connecticut",
                            "region_id": "1",
                            "added": 1399870167,
                            "updated": 1399870167
                        },
                        {
                            "id": "20",
                            "code": "MA",
                            "title": "Massachusetts",
                            "region_id": "1",
                            "added": 1399870167,
                            "updated": 1399870167
                        },
                        {
                            "id": "22",
                            "code": "ME",
                            "title": "Maine",
                            "region_id": "1",
                            "added": 1399870167,
                            "updated": 1399870167
                        },
                        {
                            "id": "31",
                            "code": "NH",
                            "title": "New Hampshire",
                            "region_id": "1",
                            "added": 1399870167,
                            "updated": 1399870167
                        }
                    ],
                    "added": 1399870167,
                    "updated": 1399870167
                }
            ]
        }
     
         
# Group Countries
Countries related resources of the **MAD Studios API**

## Countries Collection [/Countries]

### List all Countries [GET]

Alphabetical List of Countries

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.1635,
                "context": "http://api.madstudios.com/Countries",
                "code": 200,
                "count": 3,
                "timestamp": {
                    "date": "2014-05-14 19:44:45",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": 1,
                "perpage":25
            },
            "data": [
                {
                    "id": "40",
                    "title": "Canada",
                    "active": "1",
                    "iso_code_2": "CA",
                    "iso_num_code": "124",
                    "added": 1399870167,
                    "updated": 1399870167
                },
                {
                    "id": "140",
                    "title": "Mexico",
                    "active": "1",
                    "iso_code_2": "MX",
                    "iso_num_code": "484",
                    "added": 1399870167,
                    "updated": 1399870167
                },
                {
                    "id": "234",
                    "title": "United States",
                    "active": "1",
                    "iso_code_2": "US",
                    "iso_num_code": "840",
                    "added": 1399870167,
                    "updated": 1399870167
                }

            ]
        }