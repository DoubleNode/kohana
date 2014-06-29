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
> 1. Build /Photos/Upload POST Endpoint
> 2. Build /Booking Endpoint
> 3. Build /Reviews Endpoint
> 4. Complete /Mockdata. Add lorempixel.com photos
> 5. Complete Location Search Filters
> 6. Change INT ID to VARCHAR(36) UUID and require

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
                "context": "http://api.madstudios.com/Mockdata",
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
                    "location": "Created Studio 123"
                },
                {
                    "location": "Created Studio 456"
                },
                {
                    "location": "Error Creating Studio 789"
                }
            ]
        }
        

# Group Auth
Auth related resources of the **Auth API**

## Auth Collection [/Auth]

+ Parameters
    + email (required, string, `me@me.com`) ... String `email` of the Auth user. Has example value.
    + password (required, string, `mypassword`) ... String `password` of the Auth user. Has example value.

### Create a Auth - Login [POST]
+ Request (application/json)

        { 
            "email": "me@me.com",
            "password":"mypassword" 
        }

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.2208,
                "context": "http://api.madstudios.com/Auth",
                "total": 1,
                "code": 201,
                "perpage": "25",
                "count": 3,
                "timestamp": {
                    "date": "2014-06-29 19:51:54",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "page": "1"
            },
            "data": {
                "person": {
                    "id": "25AE4F76-FF9B-4AB8-12CC-59C7123668BC",
                    "lastname": "Rose LOGIN",
                    "title": "Mock Agent 37266",
                    "firstname": "Samuel",
                    "updated": "1404069255",
                    "added": "1404057955",
                    "email": "samuel.rose40@example.com",
                    "phone": "(450)-357-2099",
                    "photo": null,
                    "password": ""
                },
                "access_token_expire": 1404085914,
                "access_token": "9581390C-AEDA-64BD-4125-2055E76B2E35"
            }
        }


## Auth [/Auth/{id}]
A single Auth object with all its details

+ Parameters
    + id (required, number, `1`) ... Numeric `id` of the Auth to perform action with. Has example value.

### Remove a Auth - Logout [DELETE]
+ Response 200

# Group People
People related resources of the **MAD Studios API**

## People Collection [/People]

### List all people [GET]

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.4128,
                "context": "http://api.madstudios.com/People",
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
                        "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a61",
                        "firstname": "Bob",
                        "lastname": "Smith",
                        "title": "Sound Engineer",
                        "email": "bob@email.com",
                        "phone": "123-555-1234",
                        "photo": {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c1a65",
                            "path": "http://cdn.madstudios.com/0adff6e0-e08c-11e3-8b68-0800200c1a65.png",
                            "added" : 1398311635,
                            "updated" : 1398311635
                        },
                        "locations": [
                        {
                                "location": {
                                "country": "US",
                                "agent": "25AE4F76-FF9B-4AB8-12CC-59C7123668BC",
                                "building_type_id": "1",
                                "latitude": "33.895396",
                                "city": "Wichita Falls",
                                "updated": "1404057954",
                                "name": "Studio 37266",
                                "hourly_price": "100000",
                                "location_type_id": "3",
                                "state": "TX",
                                "added": "1404057954",
                                "id": "803249B2-688E-8826-ED49-1A99FB798BDA",
                                "geohash": "9y1bz42nzrb82",
                                "verified": "0",
                                "address2": "Suite 5799",
                                "email": "studio37266@domain.com",
                                "phone": "(425)-949-5737",
                                "website": "www.studio37266.com",
                                "postalcode": "14963",
                                "longitude": "-98.481133",
                                "service_fee": "100000",
                                "turn_time": "10000",
                                "about": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Paria sunt igitur. Duo Reges: constructio interrete. Non est igitur voluptas bonum. Hoc simile tandem est? Ratio quidem vestra sic cogit. Comprehensum, quod cognitum non habet? \n\nQuare attende, quaeso. Bonum valitudo: miser morbus. At ille pellit, qui permulcet sensum voluptate. Hoc non est positum in nostra actione. \n\nInvidiosum nomen est, infame, suspectum. Sed ille, ut dixi, vitiose. Sed hoc sane concedamus. Quid censes in Latino fore? ",
                                "photo": null,
                                "featured": "0",
                                "rating": null,
                                "address": "8347 California St"

                            }
                        }
                        ],
                        "updated": "1398311635",
                        "added": "1398311635"
                    }
                },
                {
                    "person": {
                        "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a62",
                        "firstname": "Mike",
                        "lastname": "Watt",
                        "title": "Owner",
                        "email": "mike@email.com",
                        "phone": "123-55-1234",
                        "photo": {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c1a61",
                            "path": "http://cdn.madstudios.com/0adff6e0-e08c-11e3-8b68-0800200c1a61.png",
                            "added" : 1398311635,
                            "updated" : 1398311635
                        }
                        "updated": "1398331635",
                        "added": "1398331635"
                    }
                },
                {
                    "person": {
                        "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a63",
                        "firstname": "James",
                        "lastname": "Styles",
                        "title": "Owner",
                        "email": "james@email.com",
                        "phone": "123-444-1234",
                        "photo": {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c1a63",
                            "path": "http://cdn.madstudios.com/0adff6e0-e08c-11e3-8b68-0800200c1a63.png",
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
         "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                "context": "http://api.madstudios.com/People",
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
                    "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "firstname": "Greg",
                    "lastname": "Holder",
                    "title": "Tech",
                    "email": "greg@email.com",
                    "phone": "222-222-2222",
                    "photo": {
                        "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "path": "http://cdn.madstudios.com/0adff6e0-e08c-11e3-8b68-0800200c9a64.png",
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
    + title (optional, string, `Sound Engineer`) ...  VARCHAR(45)
    + phone (optional, string, `555-555-5555`) ...  VARCHAR(24)
    + photo (optional, string, `/path_to_photo???`) ...  ??????
    + email (required, string, `greg@domain.com`) ...  VARCHAR(100) Used for Login
    + password (required, string, `mypassword`) ...  VARCHAR(50)
    
+ Request (application/json)

        { 
            "firstname": "Greg",
            "lastname" : "Holderman"
        }

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.3459,
                "context": "http://api.madstudios.com/People/0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                    "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "firstname": "Greg",
                    "lastname": "Holderman",
                    "title": "Tech",
                    "email": "greg@email.com",
                    "phone": "222-222-2222",
                    "photo": {
                        "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a65",
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
    + id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a66`) ... String `id` of the Person to perform action with. Has example value.

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.3459,
                "context": "http://api.madstudios.com/People/0adff6e0-e08c-11e3-8b68-0800200c9a66,
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
                    "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "firstname": "Greg",
                    "lastname": "Holder",
                    "title": "Tech",
                    "email": "greg@email.com",
                    "phone": "222-222-2222",
                    "photo": {
                        "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "path": "http://cdn.madstudios.com/0adff6e0-e08c-11e3-8b68-0800200c9a64.png",
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
    + id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a64`) ... String `id` of the Person to perform action with. Has example value.

+ Response 200 (application/json)
    
        {
            "meta": {
                "runtime": 0.6138,
                "context": "http://api.madstudios.com/Person/0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                "context": "http://api.madstudios.com/Locations",
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
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "path": "http://cdn.madstudios.com/0adff6e0-e08c-11e3-8b68-0800200c9a64.png",
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        "location_type": [
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "title": "Recording Studio",
                                "added": 1400256035,
                                "updated": 1400256035
                            }
                        ],
                        "building_type": [
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "title": "Business",
                                "added": 1400256035,
                                "updated": 1400256035
                            }
                        ],
                        "agent": {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "firstname": "Bob",
                            "lastname": "Smith",
                            "title": "Sound Engineer",
                            "email": "bob@email.com",
                            "phone": "123-555-1234",
                            "photo": {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "path": "http://cdn.madstudios.com/0adff6e0-e08c-11e3-8b68-0800200c9a64.png",
                                "added": 1400256035,
                                "updated": 1400256035
                            },
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        "studio_hours": [
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "1",
                                "added": "1398052567",
                                "updated": "1398052567",
                            },
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "2",
                                "added": "1398052567",
                                "updated": "1398052567"
                            },
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "3",
                                "added": "1398052567",
                                "updated": "1398052567"
                            },
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "4",
                                "updated": "1398052567",
                                "added": "1398052567"
                            },
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "person_id": "3",
                                "rating": "40",
                                "review": "It's OK"
                                "added": "1396410330",
                                "updated": "1396410330"
                            },
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "title": "Vintage Neve 8058",
                                "quantity": "1",
                                "equipment_type": [
                                    {
                                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "title": "Pro Tools HD3",
                                "quantity": "1",
                                "equipment_type": [
                                    {
                                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "path": "http://cdn.madstudios.com/0adff6e0-e08c-11e3-8b68-0800200c9a64.png",
                            "added": 1398484578,
                            "updated": 1398484578
                        },
                        "location_type": [
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "title": "Dance Studio",
                                "added": 1400256035,
                                "updated": 1400256035
                            }
                        ],
                        "building_type": [
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "title": "Stand Alone Building",
                                "added": 1400256035,
                                "updated": 1400256035
                            },
                        "agent": {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "firstname": "Mike",
                            "lastname": "Watt",
                            "title": "Owner",
                            "email": "mike@email.com",
                            "phone": "123-123-1234",
                            "photo": {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "path": "http://lorempixel.com/1024/768/technics/?2",
                                "added": 1398484578,
                                "updated": 1398484578
                            },
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        "studio_hours": [
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "1",
                                "added": "1398484578",
                                "updated": "1398484578"
                            },
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "2",
                                "added": "1398484578",
                                "updated": "1398484578"
                            },
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "3",
                                "added": "1398484578",
                                "updated": "1398484578"
                            },
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "open": "1396191600",
                                "close": "1396224000",
                                "day": "4",
                                "added": "1398484578",
                                "updated": "1398484578"
                            },
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "person_id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "location_id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "rating": "85",
                                "review": "Good Stuff"
                                "added": "1396410330",
                                "updated": "1396410330"
                            },
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "person_id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "location_id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "rating": "25",
                                "review": "Bad Stuff"
                                "added": "1396410330",
                                "updated": "1396410330"
                            }
                        ],
                        "equipment": [
                            {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "title": "Vintage Neve 8058",
                                "quantity": "1",
                                "equipment_type": [
                                    {
                                        "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a642",
                                "title": "Pro Tools HD3",
                                "quantity": "1",
                                "equipment_type": [
                                    {
                                        "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "firstname": "Nick",
                    "lastname": "Dofflemyer",
                    "title": "Engineer",
                    "phone": "818-286-6233",
                    "email": "nick.d@umusic.com"
                }
            ,
            "hours":[
                {
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "open": "1400115594",
                    "close": "1400108409",
                    "day": "3"
                },
                {
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "open": "1400115594",
                    "close": "1400108409",
                    "day": "4"
                },
                {
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "open": "1400115594",
                    "close": "1400108409",
                    "day": "5"
                },
                {
                   "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "open": "1400115594",
                    "close": "1400108409",
                    "day": "6"
                },
                {
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "open": "1400115594",
                    "close": "1400108409",
                    "day": "7"
                }
            ],
            "equipment":[
                {
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "title":"Microphones",
                    "quantity" : 2
                },
                {
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "title":"Drum Riser",
                    "quantity" : 1
                },
                {
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "title":"Monitors",
                    "quantity" : 4
                }
            ],
            "location_type_id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
            "building_type_id": "0adff6e0-e08c-11e3-8b68-0800200c9a64"
        }

+ Response 201 (application/json)

        {
            "meta": {
                "runtime": 0.6138,
                "context": "http://api.madstudios.com/Locations",
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
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                        "id": null,
                        "path": null,
                        "added": 0,
                        "updated": 0
                    },
                    "location_type": [
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "title": "Dance Studio",
                            "added": 1400256035,
                            "updated": 1400256035
                        }
                    ],
                    "building_type": [
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "title": "Stand Alone Building",
                            "added": 1400256035,
                            "updated": 1400256035
                        }
                    ],
                    "agent": {
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "firstname": "Nick ",
                        "lastname": "Dofflemyer",
                        "title": "Engineer",
                        "email": "nick.d@umusic.com",
                        "phone": "818-286-6233",
                        "photo": {
                            "id": null,
                            "path": null,
                            "added": 0,
                            "updated": 0
                        },
                        "updated": "1398331635",
                        "added": "1398331635",
                    },
                    "hours": [
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "open": "1400115594",
                            "close": "1400108409",
                            "day": "3",
                            "added": "1398331635",
                            "updated": "1398331635"
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "open": "1400115594",
                            "close": "1400108409",
                            "day": "4",
                            "added": "1398331635",
                            "updated": "1398331635"
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "open": "1400115594",
                            "close": "1400108409",
                            "day": "5",
                            "added": "1398331635",
                            "updated": "1398331635"
                        },
                        {
                           "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "open": "1400115594",
                            "close": "1400108409",
                            "day": "6",
                            "added": "1398331635",
                            "updated": "1398331635"
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "open": "1400115594",
                            "close": "1400108409",
                            "day": "7",
                            "added": "1398331635",
                            "updated": "1398331635"
                        }
                    ],
                    "rating": "0",
                    "reviews": [
                        {
                           
                        }
                    ],
                    "equipment": [
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "title":"Microphones",
                            "quantity" : 2,
                            "added": "1398331635",
                            "updated": "1398331635"
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "title":"Drum Riser",
                            "quantity" : 1,
                            "added": "1398331635",
                            "updated": "1398331635"
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "title":"Monitors",
                            "quantity" : 4,
                            "added": "1398331635",
                            "updated": "1398331635"
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
    + id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a64`) ... String `id` of the Location to perform action with. Has example value.
    
+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.6138,
                "context": "http://api.madstudios.com/Locations/0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                            id: "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            title: "Recording Studio",
                            "added": 1400256035,
                            "updated": 1400256035
                        }
                    ],
                    "about": "Tree Sound Studios is a unique blend of vision, precision, and the desire to make great music. We provide our clients with an atmosphere designed to excite and inspire. Our accommodating staff prides itself on providing the individual attention that every recording artist needs. Detail, combined with technical expertise and dedication make Tree Sound Studios an ideal recording studio for audio projects of all levels. We are located just 20 minutes from Buckhead in Atlanta, GA, ask about our complimentary bio-diesel car service to take you to and from the studio.",
                    "building_type": [
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "title": "Business",
                            "added": 1400256035,
                            "updated": 1400256035
                        }
                    ],
                    "equipment": {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "firstname": "Sammy",
                        "lastname": "Davis",
                        "email": "davis.sammy@ratpack.com",
                        "phone": "123-555-4444",
                        "title": "Facilities Manager",
                        "photo": {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "path": "http://cdn.madstudios.com/0adff6e0-e08c-11e3-8b68-0800200c9a64.png",
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        "added": 1400256035,
                        "updated": 1400256035
                    },
                    "rating": "75.5",
                    "reviews": [
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "rating": 85,
                            "review": "Good Stuff",
                            "person_id": 2,
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "path": "http://cdn.madstudios.com/0adff6e0-e08c-11e3-8b68-0800200c9a64.png",
                        "added": 1400256035,
                        "updated": 1400256035
                    },
                    "hours": [
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "day": "1",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "day": "2",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "day": "3",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "day": "4",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1400256035,
                            "updated": 1400256035
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
    + id (optional, string, `0adff6e0-e08c-11e3-8b68-0800200c9a64`) ...  VARCHAR(36) UUID
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
                "context": "http://api.madstudios.com/Locations/0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "title": "Recording Studio",
                            "added": 1396410330,
                            "updated": 1396410330
                        }
                    ],
                    "about": "Tree Sound Studios is a unique blend of vision, precision, and the desire to make great music. We provide our clients with an atmosphere designed to excite and inspire. Our accommodating staff prides itself on providing the individual attention that every recording artist needs. Detail, combined with technical expertise and dedication make Tree Sound Studios an ideal recording studio for audio projects of all levels. We are located just 20 minutes from Buckhead in Atlanta, GA, ask about our complimentary bio-diesel car service to take you to and from the studio.",
                    "building_type": [
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "title": "Business",
                            "added": 1396410330,
                            "updated": 1396410330
                        }
                    ],
                    "equipment": [
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "title": "Gefell UM92",
                            "equipment_type": {
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "firstname": "Sammy",
                        "lastname": "Davis",
                        "email": "davis.sammy@ratpack.com",
                        "phone": "123-555-4444",
                        "title": "Facilities Manager",
                        "photo": {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "path": "http://cdn.madstudios.com/0adff6e0-e08c-11e3-8b68-0800200c9a64.png",
                            "added": 1396410330,
                            "updated": 1396410330
                        },
                        "added": 1400256035,
                        "updated": 1400256035
                    },
                    "rating": "75.5",
                    "reviews": [
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "rating": 85,
                            "review": "Good Stuff",
                            "person_id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "added": 1396410330,
                            "updated": 1396410330
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "rating": 66,
                            "review": "Bad Stuff",
                            "person_id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "added": 1396410330,
                            "updated": 1396410330
                        }
                    ],
                    "phone": "940-349-9229",
                    "email": "mali@treesoundstudios.com",
                    "website": "www.treesoundstudios.com",
                    "geohash": "9mudq5gq1x5tg",
                    "profile_photo": {
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "path": "http://cdn.madstudios.com/0adff6e0-e08c-11e3-8b68-0800200c9a64.png",
                        "added": 1396410330,
                        "updated": 1396410330
                    },
                    "hours": [
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "day": "1",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1396410330,
                            "updated": 1396410330
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "day": "2"
                            "open": "1396191600"
                            "close": "1396224000",
                            "added": 1396410330,
                            "updated": 1396410330
                        },
                        {
                           "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "day": "3",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1396410330,
                            "updated": 1396410330
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "day": "4",
                            "open": "1396191600",
                            "close": "1396224000",
                            "added": 1396410330,
                            "updated": 1396410330
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
    + id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a64`) ... String `id` of the Location to perform action with. Has example value.
    
+ Response 200 (application/json)
    
        {
            "meta": {
                "runtime": 0.6138,
                "context": "http://api.madstudios.com/Locations/0adff6e0-e08c-11e3-8b68-0800200c9a64",
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

+ Parameters

    + id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a64`) ...  UUID
    + open (required, in, `1`) ...  GMT Timestamp
    + close (required, in, `1`) ...  GMT Timestamp
    + day (required, in, `1`) ...  0 = Sunday, 6 = Saturday
    
+ Request (application/json)

        {
            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
            "open": "13961916000",
            "close": "13962240000",
            "day": "7",
            "location_id": "1" 
        }

+ Response 201 (application/json)

        {
            "meta": {
                "runtime": 0.1937,
                "context": "http://api.madstudio.dev/Hours/0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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

    + open (required, in, `1`) ...  GMT Timestamp
    + close (required, in, `1`) ...  GMT Timestamp
    + day (required, in, `1`) ...  0 = Sunday, 6 = Saturday

+ Request (application/json)

        {
            "open": "1396191600",
            "close": "1396224000",
            "day": "7"
        }

+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.1937,
                "context": "http://api.madstudio.dev/Equipment/0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64"
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
    + id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a64`) ... Numeric `id` of the Hour to perform action with. Has example value.
    
+ Response 200 (application/json)
    
        {
            "meta": {
                "runtime": 0.6138,
                "context": "http://api.madstudios.com/Hours/0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
            "title": "4-Track",
            "equipment_type_id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
            "about": "Taskcam",
            "quantity": "2",
            "location_id": "0adff6e0-e08c-11e3-8b68-0800200c9a64" 
        }

+ Response 201 (application/json)

        {
            "meta": {
                "runtime": 0.1937,
                "context": "http://api.madstudios.com/Equipment/0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64"
                    "title": "4-Track",
                    "equipment_type": [
                        {
                            "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
            "title": "4-Track Mixing Board",
            "about": "Taskcam Beta 2"
        }

+ Response 201 (application/json)

        {
            "meta": {
                "runtime": 0.1937,
                "context": "http://api.madstudio.dev/Equipment/0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "title": "4-Track Mixing Board",
                    "about": "Taskcam Beta 2",
                    "quantity": 2,
                    "equipment_type": [
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                "context": "http://api.madstudios.com/Equipment/0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "title": "Dance Studio",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "title": "Recording Studio",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "title": "Business",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "title": "House",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "title": "Console",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "title": "Microphones",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "code": "AK",
                        "title": "Alaska",
                        "region": "6",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "code": "AL",
                        "title": "Alabama",
                        "region": "3",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                       "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "title": "International",,
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "title": "Mid Atlantic",,
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                     "type": {
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "title": "International",
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                {
                    "type": {
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "title": "Mid Atlantic",
                        "states": [
                            {
                                "title": "Iowa",
                                "code": "IA",
                                "region_id": "4",
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "added": 1399870167,
                                "updated": 1399870167
                            },
                            {
                                "title": "Illinois",
                                "code": "IL",
                                "region_id": "4",
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "added": 1399870167,
                                "updated": 1399870167
                            },
                            {
                                "title": "Indiana",
                                "code": "IN",
                                "region_id": "4",
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "added": 1399870167,
                                "updated": 1399870167
                            },
                            {
                                "title": "Kansas",
                                "code": "KS",
                                "region_id": "4",
                                "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                                "added": 1399870167,
                                "updated": 1399870167
                            }
                        ]
                },
                {
                    "type": {
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "title": "Midwest", 
                    "states": [
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "code": "CT",
                            "title": "Connecticut",
                            "region_id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "added": 1399870167,
                            "updated": 1399870167
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "code": "MA",
                            "title": "Massachusetts",
                            "region_id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "added": 1399870167,
                            "updated": 1399870167
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "code": "ME",
                            "title": "Maine",
                            "region_id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "added": 1399870167,
                            "updated": 1399870167
                        },
                        {
                            "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                            "code": "NH",
                            "title": "New Hampshire",
                            "region_id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "title": "Canada",
                    "active": "1",
                    "iso_code_2": "CA",
                    "iso_num_code": "124",
                    "added": 1399870167,
                    "updated": 1399870167
                },
                {
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "title": "Mexico",
                    "active": "1",
                    "iso_code_2": "MX",
                    "iso_num_code": "484",
                    "added": 1399870167,
                    "updated": 1399870167
                },
                {
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                    "title": "United States",
                    "active": "1",
                    "iso_code_2": "US",
                    "iso_num_code": "840",
                    "added": 1399870167,
                    "updated": 1399870167
                }

            ]
        }
 
        
# Group Time Zones
Time Zones related resources of the **MAD Studios API**

## Time Zone Collection [/Timezones]

### List all Time Zones [GET]


+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.1635,
                "context": "http://api.madstudios.com/Timezones",
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
                    "timezone": {
                        "id": "0adff6e0-e08c-11e3-8b68-0800200c9a64",
                        "title": "Africa/Abidjan"
                        "added": 1399870167,
                        "updated": 1399870167
                    }
                },
                
            ]
        }
        
               
# Group Photos @TODO
Photo related resources of the **MAD Studios API**

## Photo Collection [/Photos]

### Create a Photo [POST]

+ Parameters
    + id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a66`) ...  VARCHAR(36) UUID
    + photo (required, Base64) ... Base64 Encoded Image
    
+ Request (application/json)

        { 
            "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a66",
            "photo" : "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAIAAABMXPacAAAACXBIWXMAAA9hAAAPYQGoP6dpAABBA2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS41LWMwMjEgNzkuMTU0OTExLCAyMDEzLzEwLzI5LTExOjQ3OjE2ICAgICAgICAiPgogICA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgICAgICAgICB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIKICAgICAgICAgICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgICAgICAgICAgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiCiAgICAgICAgICAgIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIKICAgICAgICAgICAgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIgogICAgICAgICAgICB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIgogICAgICAgICAgICB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyI+CiAgICAgICAgIDx4bXBNTTpEb2N1bWVudElEPnhtcC5kaWQ6ZTU1MWM1MGYtNjFmZi00YzE1LTg0ZTYtYWVmNmZiN2IzZTQ4PC94bXBNTTpEb2N1bWVudElEPgogICAgICAgICA8eG1wTU06SW5zdGFuY2VJRD54bXAuaWlkOjViN2VhZjY5LTRjNTQtNDIwNi05NzAzLTI1MzcyMTRhODgzNzwveG1wTU06SW5zdGFuY2VJRD4KICAgICAgICAgPHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD40MjJFMUMyM0RDNUM4RTM5NTdCQ0YwNUY5MDI4MzM1QjwveG1wTU06T3JpZ2luYWxEb2N1bWVudElEPgogICAgICAgICA8eG1wTU06SGlzdG9yeT4KICAgICAgICAgICAgPHJkZjpTZXE+CiAgICAgICAgICAgICAgIDxyZGY6bGkgcmRmOnBhcnNlVHlwZT0iUmVzb3VyY2UiPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6YWN0aW9uPnNhdmVkPC9zdEV2dDphY3Rpb24+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDppbnN0YW5jZUlEPnhtcC5paWQ6ODljZWUwYzAtMzI0Ni00NGMzLWJjNDAtYTY5NjY5MWY0OGMwPC9zdEV2dDppbnN0YW5jZUlEPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6d2hlbj4yMDE0LTAzLTEwVDIxOjA3OjAyLTA1OjAwPC9zdEV2dDp3aGVuPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6c29mdHdhcmVBZ2VudD5BZG9iZSBQaG90b3Nob3AgQ0MgKE1hY2ludG9zaCk8L3N0RXZ0OnNvZnR3YXJlQWdlbnQ+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDpjaGFuZ2VkPi88L3N0RXZ0OmNoYW5nZWQ+CiAgICAgICAgICAgICAgIDwvcmRmOmxpPgogICAgICAgICAgICAgICA8cmRmOmxpIHJkZjpwYXJzZVR5cGU9IlJlc291cmNlIj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OmFjdGlvbj5jb252ZXJ0ZWQ8L3N0RXZ0OmFjdGlvbj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OnBhcmFtZXRlcnM+ZnJvbSBpbWFnZS9qcGVnIHRvIGltYWdlL3BuZzwvc3RFdnQ6cGFyYW1ldGVycz4KICAgICAgICAgICAgICAgPC9yZGY6bGk+CiAgICAgICAgICAgICAgIDxyZGY6bGkgcmRmOnBhcnNlVHlwZT0iUmVzb3VyY2UiPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6YWN0aW9uPmRlcml2ZWQ8L3N0RXZ0OmFjdGlvbj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OnBhcmFtZXRlcnM+Y29udmVydGVkIGZyb20gaW1hZ2UvanBlZyB0byBpbWFnZS9wbmc8L3N0RXZ0OnBhcmFtZXRlcnM+CiAgICAgICAgICAgICAgIDwvcmRmOmxpPgogICAgICAgICAgICAgICA8cmRmOmxpIHJkZjpwYXJzZVR5cGU9IlJlc291cmNlIj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OmFjdGlvbj5zYXZlZDwvc3RFdnQ6YWN0aW9uPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6aW5zdGFuY2VJRD54bXAuaWlkOmU1NTFjNTBmLTYxZmYtNGMxNS04NGU2LWFlZjZmYjdiM2U0ODwvc3RFdnQ6aW5zdGFuY2VJRD4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OndoZW4+MjAxNC0wMy0xMFQyMTowNzowMi0wNTowMDwvc3RFdnQ6d2hlbj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OnNvZnR3YXJlQWdlbnQ+QWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpPC9zdEV2dDpzb2Z0d2FyZUFnZW50PgogICAgICAgICAgICAgICAgICA8c3RFdnQ6Y2hhbmdlZD4vPC9zdEV2dDpjaGFuZ2VkPgogICAgICAgICAgICAgICA8L3JkZjpsaT4KICAgICAgICAgICAgICAgPHJkZjpsaSByZGY6cGFyc2VUeXBlPSJSZXNvdXJjZSI+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDphY3Rpb24+c2F2ZWQ8L3N0RXZ0OmFjdGlvbj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0Omluc3RhbmNlSUQ+eG1wLmlpZDo1YjdlYWY2OS00YzU0LTQyMDYtOTcwMy0yNTM3MjE0YTg4Mzc8L3N0RXZ0Omluc3RhbmNlSUQ+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDp3aGVuPjIwMTQtMDMtMTBUMjE6MDc6MjktMDU6MDA8L3N0RXZ0OndoZW4+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDpzb2Z0d2FyZUFnZW50PkFkb2JlIFBob3Rvc2hvcCBDQyAoTWFjaW50b3NoKTwvc3RFdnQ6c29mdHdhcmVBZ2VudD4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OmNoYW5nZWQ+Lzwvc3RFdnQ6Y2hhbmdlZD4KICAgICAgICAgICAgICAgPC9yZGY6bGk+CiAgICAgICAgICAgIDwvcmRmOlNlcT4KICAgICAgICAgPC94bXBNTTpIaXN0b3J5PgogICAgICAgICA8eG1wTU06RGVyaXZlZEZyb20gcmRmOnBhcnNlVHlwZT0iUmVzb3VyY2UiPgogICAgICAgICAgICA8c3RSZWY6aW5zdGFuY2VJRD54bXAuaWlkOjg5Y2VlMGMwLTMyNDYtNDRjMy1iYzQwLWE2OTY2OTFmNDhjMDwvc3RSZWY6aW5zdGFuY2VJRD4KICAgICAgICAgICAgPHN0UmVmOmRvY3VtZW50SUQ+NDIyRTFDMjNEQzVDOEUzOTU3QkNGMDVGOTAyODMzNUI8L3N0UmVmOmRvY3VtZW50SUQ+CiAgICAgICAgICAgIDxzdFJlZjpvcmlnaW5hbERvY3VtZW50SUQ+NDIyRTFDMjNEQzVDOEUzOTU3QkNGMDVGOTAyODMzNUI8L3N0UmVmOm9yaWdpbmFsRG9jdW1lbnRJRD4KICAgICAgICAgPC94bXBNTTpEZXJpdmVkRnJvbT4KICAgICAgICAgPGRjOmZvcm1hdD5pbWFnZS9wbmc8L2RjOmZvcm1hdD4KICAgICAgICAgPHBob3Rvc2hvcDpDb2xvck1vZGU+MzwvcGhvdG9zaG9wOkNvbG9yTW9kZT4KICAgICAgICAgPHhtcDpDcmVhdGVEYXRlPjIwMTQtMDMtMDlUMjE6Mzg6MjgtMDU6MDA8L3htcDpDcmVhdGVEYXRlPgogICAgICAgICA8eG1wOk1vZGlmeURhdGU+MjAxNC0wMy0xMFQyMTowNzoyOS0wNTowMDwveG1wOk1vZGlmeURhdGU+CiAgICAgICAgIDx4bXA6TWV0YWRhdGFEYXRlPjIwMTQtMDMtMTBUMjE6MDc6MjktMDU6MDA8L3htcDpNZXRhZGF0YURhdGU+CiAgICAgICAgIDx4bXA6Q3JlYXRvclRvb2w+QWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpPC94bXA6Q3JlYXRvclRvb2w+CiAgICAgICAgIDx0aWZmOkltYWdlV2lkdGg+NzAwPC90aWZmOkltYWdlV2lkdGg+CiAgICAgICAgIDx0aWZmOkltYWdlTGVuZ3RoPjcwMDwvdGlmZjpJbWFnZUxlbmd0aD4KICAgICAgICAgPHRpZmY6Qml0c1BlclNhbXBsZT4KICAgICAgICAgICAgPHJkZjpTZXE+CiAgICAgICAgICAgICAgIDxyZGY6bGk+ODwvcmRmOmxpPgogICAgICAgICAgICAgICA8cmRmOmxpPjg8L3JkZjpsaT4KICAgICAgICAgICAgICAgPHJkZjpsaT44PC9yZGY6bGk+CiAgICAgICAgICAgIDwvcmRmOlNlcT4KICAgICAgICAgPC90aWZmOkJpdHNQZXJTYW1wbGU+CiAgICAgICAgIDx0aWZmOlBob3RvbWV0cmljSW50ZXJwcmV0YXRpb24+MjwvdGlmZjpQaG90b21ldHJpY0ludGVycHJldGF0aW9uPgogICAgICAgICA8dGlmZjpPcmllbnRhdGlvbj4xPC90aWZmOk9yaWVudGF0aW9uPgogICAgICAgICA8dGlmZjpTYW1wbGVzUGVyUGl4ZWw+MzwvdGlmZjpTYW1wbGVzUGVyUGl4ZWw+CiAgICAgICAgIDx0aWZmOlhSZXNvbHV0aW9uPjEwMDAwMDAvMTAwMDA8L3RpZmY6WFJlc29sdXRpb24+CiAgICAgICAgIDx0aWZmOllSZXNvbHV0aW9uPjEwMDAwMDAvMTAwMDA8L3RpZmY6WVJlc29sdXRpb24+CiAgICAgICAgIDx0aWZmOlJlc29sdXRpb25Vbml0PjI8L3RpZmY6UmVzb2x1dGlvblVuaXQ+CiAgICAgICAgIDxleGlmOkV4aWZWZXJzaW9uPjAyMjE8L2V4aWY6RXhpZlZlcnNpb24+CiAgICAgICAgIDxleGlmOkNvbG9yU3BhY2U+NjU1MzU8L2V4aWY6Q29sb3JTcGFjZT4KICAgICAgICAgPGV4aWY6UGl4ZWxYRGltZW5zaW9uPjEyODwvZXhpZjpQaXhlbFhEaW1lbnNpb24+CiAgICAgICAgIDxleGlmOlBpeGVsWURpbWVuc2lvbj4xMjg8L2V4aWY6UGl4ZWxZRGltZW5zaW9uPgogICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KICAgPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAKPD94cGFja2V0IGVuZD0idyI/PgoDa4sAAAAgY0hSTQAAeiUAAICDAAD5/wAAgOkAAHUwAADqYAAAOpgAABdvkl/FRgAADdBJREFUeNrsnWlsXNd1x3/nvVk5C1eJEiUukkxFVmSrjhMnKZrWqWujCeI2SdHU3REDLgIUTV0YKIqm7YeiDdIodmC7aNHajbPUdZvUUeIl/lBblizXtiRrJ6mdokyRFCWKO+e9mbecfhhSIuVNJGdGlHv/IObDLO/dd3/3nHvOue8+iqpidO1kmS4wAAwAIwPAADAyAAwAIwPAADAyAAwAIwPAADAyAAwAIwPAADAyAAwAIwPAADAyAAwAIwPAADAyAAwAIwPAADAyAAwAIwPAADAyAK5rRa7Tdo97QSxqh1r68RgVLJAlC+C+nxxurk7+zadvuFZdPzA89tnnB26/q/2PGznpa2lN2FIiggUxoUaot6gRiS4pACNu8PgPXp3M+9/81Q2V7/3/7T73uScOjS7bGAb2b0FKZCLUUo1WgQDyiiqB0K9ELUkJtaItltSLlsMw5g2gtTpBTXLLDw/0jkw99du3VrL3n9h75t4ndrHmZtbWHZkIfubbv2GpFxKU/Ewy86q4qt1Kr2ijsN7WWovSYpi3BfuhkojSXPuf27tvemjH8RGnMr3/wM+67n1kO6taWd8qzlQQygsT9EBGKOc+W41CtRCH/pCdvhwMCEt6wgW5UFWxhKaajuNDm7e8vO30xbJ2fQHu/u7uh57aQ1uTbNyA46Ckbc66bHOYsqTMDFCwICPE0BOBbPdlAqVE57QW3ChRlVVZd8q74+Gd/7L7TJku/vS4e8tDO5575RTNtVb7jYiN7yFUCaMeBx05oqpCtMwMihhsqEHHQ91R0PMhJWGwuCAiUKmvIhb9ymO77nv6YMmv+bkTFzZ+Y1tX90VWJKWpVavr1XUQKV563GLQ5ZjH0VDSIpUJHBXSKCqv+vSVgsGio7hQJRWjMfv4C0fveuyNca9kM+JDr52++9uvuI4vtRErnWVVm3ru7C+kLHoLDOSlBz0Xaqb8RnDJ+BNCXNntM6JcawDFKSFqs7r2f3a/tfnB7YeHphZ/yPuf6Xzg+3vJJKQ6RijafIPaETxvTtMFXznpUAg5FFAZR3TJDuKCDa975Bf3sI0S5TGqAtJS23N2bPM3t209OrjgI0344e3//NrDWw/TkJZUHCfHqlatXYabY66bUaiJcMLlYoExi45AMpVyRMWzV4Gr7AlYAgAuTQnLs+qHX3z01b/fdnIBB9jVP7Z5y8s7DvTTVi9RGzdHdS0rWyi479gHNuRDuhzS0OEzoJq2RCvIICv0h3QvoiRS6mJcGEpNikzyr57cd8+Te+f10x91nvvElu2n+8ZkdY2gBD4itLS/3fnM6QKboznOe8Rs3vQlQGMVzA0VUspxH0+XCIAig2SU1dX/te3kbY/uvJj3ruZHX99+8kv/9BqWJY0ZghAVyTs0tWh1HTORzzsqJkwEcsql0aY/4FhAurIV3rgwiXSHC8wMytNYVRGhpW5P1+Cmb2zb1jP83l///af2fe3J/WQSUp0gUETI56ip11VrKOTf3xfbHHVkyNc6Ww8FDCjpSs3G00YgnAnJK0sGQLGUoipNNeeGnDse3P7EvrPv+J3+XOGWh3f8+4snWJmVZJSiMw18LNGWdVg2/vsbUMqiL88Jh2URyau86ROKxKRyRhBVHQs5t9QAAAShLE+TiN37b7v+9LmuKz585a2Rm/7h5QNHLtBaJ7ZQjOcE8g6r2jRb//bI593GYMKiK8d4oHUWA6F0BZqqrBFEhQuhLD0ARQaZODVVj2w9fOdjuwpBWHz7sb29v/TgjuHhnDTVSKjTvSWC61BTT1MbhXmU+VI2PQW6XbI2VcIhX86FZCrIIAbjquFSBFDMlmMRmmtf3P3Wzf/46tELU1/f2f1H//oGMVuWZwhnNbvofJrXqmXj+/O6DEG6HHzVBASwzycQYpVKDCIwGTIcLuSHlbFSFaC55ljP6I2P7MT1aUhLPEIwt8l5h9Z2qW5QZ5L59J1CxqLbld48zXGCgD6VQ374sQijFbECAR9GlIalaAGzTaEY5yQiEoswO38Rwc3NOB93IWNQyIUcdzVqYUFKOBJU1BEJFOZ/qmtwV4TEbLEtriih+B5Rm9Z2FVHfW4iNQcbmiCPnCyQtYuAjewMJhBiVYCDgz/80S+S2FKHg0tSm1XXkcyzUcSeEEZ8uR5M2IWSE/pDDAWmrElOBwFKdhN+n4YI7RU09K1txc4tZcZ2ORx0Z9TUuAGnRDp/eUDOWaJkhKAtpu3Xtx77vEYvQ1o5Y84p83i0pO1/Q03myEVWIIiGy31e/IjUimT+Baw1AlILDilaydboI5zPbD1giXTmcEFtQyAjn1DockC6/BdjX2RwwnXY1sLJFXackt3sUp+LTrvS4ZG3VmVpNl09vmSOiEKKi1xUAz8O2aVuvV1fzuUrZ4CmdOZEZpDHwZ1KzeNkY2EJmern6egHgF2heS6aGvEPp4pTiIsEplzN5ydgzZiFyXuVgQFLKcs0+pESWXYa+xAFMF5zrZpxPqSszwkRIZ47YzHgXSAkdvvSVxxEVIC3ErpsoyPewbVrWqULgl/zwIaQtevIM+1plTRtBFAT2+ZqHeBlSsPoF2fA1AlDIs3qdZmtL63xmK2lxweOIQ5U1Pd4V0sI5lY6AVGnXwiEurLT0egAgQt6hYTlNLbhuWU8VFbocpkK95BmKk0FnyFklW6Lle4FJWGEVZ+ClD6DofFavozzO54p4tL8gJxwykctOPwqKvOmTV42XokYUQATabRYWRlccQMGleQ3pjJbN+cwemyidDl6IPdsIYDCUjpCULDb1EBiHNTbVCz2QVVHn4+aoX64rWzWfr8AJFbIRul1OuWTty4O9mB53+tKrZK2FG4GAAynhQ4vYNFAxAILnEY3S0o5qWZ3P25IyOeaoxZxaXHHX0Z6AvJJcUFQq4IEHt9nEF2HKFQOgeC6r1pDOvvd9PuWYCU650u9Nx6PMioiGQjkQEJ+/IypuZpqAzREaLBYzlVgVcj75HPXLWNmsFez9ouLCiM+RnKTsOYtARUd0NJS+kOx8jKDY+2PwIZt1VjH1XeIW4BWIxWlbrxV0PlcYwVGHQU+Tc8uVERDlTZ+8kLg6BkXPM45stNlsl6B5FQFQyLOqjaosebfCw/9SUjboyXGHtD2nlxXSoheUgz5VV1cjmkRc5KO2blpo3FlZAMXIp2EZjasr73xmd3RcOOXiBETkio8kI3IkoCck8+6pmQUejEGN6C9EwzUl6v0yAxDByxON0NKuUHnnM1tpmzN5TriSta90NREQZJ9PQTUxdz4t9nEeRhQRNtncHmUBJc/3UGRhI+qqdoVoiO9xw0ZSWXKTpS04X/qbR9So0uGwIYk1d/W8uGIzpOwP+ERkeqN2CB5SQCNQLayzabFIyRLYqD0wkWdgHOsqmpJ3aGoluZLzE3Nuf1ts7q9ErPMFJQ7e/LgdHKcurjdVMfY2a/Rhu4fAjTYOxIQGIS0sExotEbRMz4+YN4A/uKXpwzWJTDbxfrtClCCgfjmJKgqREjZeQ8Qi3iixGBLMzyM6AStjtMVw7bd/KjnVrLDWEkRTkJrzbIJyzV5i/qHztZV5XpABYAAYGQAGgNH/BwBeGOZmgq4pVf+dAzANNDybe9cA8+S43+f4QC7QQSec9LQ3FygK6oXF1zCYviWO82446l1OQfxQ/Vnh8/4LhSvacGjYywchldvaVFkAP+33mp4YVNXjE37z44Nb+wrF9x/rdjb+eOhSZPyHuyZv2zp887MXt56ds2ofwl93TH3hpdEtR11gz0Xv1ueH25+9+PlXx1GOjAef2TEK8uXdk9865oD8xxl304+HPvnc8F8emn58xZd3T3ztcA4YKejtL43es328/dnh/SMe0Dnuf/KlkT97fWLnBa+Cz+yrLICcr2MTwfd68j98qzAy6o8Upgfa3lH/yLD/g57p7n59KHjglqpv35r54ivjB0cvJ7uq+ncdU8vi1v3rq4CP10e/uimZiMlPP1UtIqenwpOTAdDrBH1OCLx20bupMfr07TUPH8/9xaFJ4HQuHHBD4EuvjY94uucL9b/blvj1nWPAwRH/jePO761P/sqK2AfWBQ0Vwjs+kt5yzHnhXGHtpqoLbgi8cdF75nR+ZUPkb7ty09m5sHlZ9I6mGCEXZ21/tkW6765vTtl3bR8d8zRhy4erIyuS1urk9JqsjwAh00VNP6Q5G9lYG1mRtLrGAyAVkSob4NiEf3OtnY3InStjA44Cv9Oa+NHn6h/unHrgwFQl+6Sizw0ddMNfrI+87Bc2ZO01njXqKXD/vqnVSfnqhqo/2T/1TF/+11bF6+Jyz4uj9QnrKxuSv9x4eTyGqt/pdo+O+rmZRcSRgk7MPKXh5xsi2Yhs/O+hM7Dl5ipgXdr+892T+wa9ZXH5/m0ZwA3UCQC+9/Hs53eMfurCxX1T4bc+kgb2j/g/6XFPFzQfVrJLKluKODMVJG2JWQgMFTRhy6qk9Xxf4TOrYhZ0jvm5QD9WFz05GbwyUFiTtT/dGJtbXeLp3nzHucL9P5euiQowlA8HnPCmmulhNJQPtxyY+s325EfrIqBjnr7YX/BC7lmTKH7hyHgQt2Rt2gK6p4JHD03d2Rr/bFMcGPX0wc6plpR9X3vyAwvAyOQBBoCRAWAAGBkABoCRAWAAGBkABoABYGQAGABGBoABYGQAGABGBoABYGQAGABGBoABYGQAGABGBoABYGQAGABGBoABYGQAGABGBsAHTf83ABewFaiOymDUAAAAAElFTkSuQmCC" 
        }

+ Response 201 (application/json)

        {
            "meta": {
                "runtime": 0.3459,
                "context": "http://api.madstudios.com/Photos",
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
                "photo": {
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a66",
                    "path": "http://cdn.madstudios.com/0adff6e0-e08c-11e3-8b68-0800200c9a66.png",
                    "added": "1398311635",
                    "updated": "1398311635"
                }
            }
        }
        
                
# Group Messages @TODO
Message related resources of the **MAD Studios API**

## Message Collection [/Messages]

### Create a Message [POST]

+ Parameters
    + id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a66`) ...  VARCHAR(36) UUID
    + person_id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a66`) ...  VARCHAR(36) ID of recipient
    + sender_id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a66`) ...  VARCHAR(36) ID of sender
    + location_id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a66`) ...  VARCHAR(36) ID of location
    + thread_id (optional, string, `0adff6e0-e08c-11e3-8b68-0800200c9a66`) ...  VARCHAR(36) ID of thread if there is one. You do not need a thread_id for the initial message sent.
    + type (required, string, `message`) ...  VARCHAR(16) message
    + text (required, string, `Sample Message Body`) ...  LONGTEXT Message Body
    
+ Request (application/json)

        { 
            "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a66",
            "person_id" : "0bdff6e0-e08c-11e3-8b68-0800200c9a56",
            "sender_id" : "0adff6e0-e08c-11e3-8b68-0800200c9a66",
            "location_id" : "0adff6e0-e08c-11e3-8b68-0800200c9a66e",
            "thread_id" : "0adff6e0-e08c-11e3-8b68-0800200c9a66e",
            "type" : "message" 
            "text" : "Sample Message" 
        }

+ Response 201 (application/json)

        {
            "meta": {
                "runtime": 0.3459,
                "context": "http://api.madstudios.com/Messages",
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
                "message": {
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a66",
                    "person_id": "0adff6e0-e08c-11e3-8b68-0800200c9a66",
                    "sender_id": "0adff6e0-e08c-11e3-8b68-0800200c9a66",
                    "location_id": "0adff6e0-e08c-11e3-8b68-0800200c9a66",
                    "thread_id": "0adff6e0-e08c-11e3-8b68-0800200c9a66",
                    "type": "message,
                    "text": "Sample Message",
                    "added": "1398311635",
                    "updated": "1398311635"
                }
            }
        }
        
# Group Reviews @TODO
Message related resources of the **MAD Studios API**

## Review Collection [/Reviews]

### List all Reviews [GET]


+ Response 200 (application/json)

        {
            "meta": {
                "runtime": 0.1635,
                "context": "http://api.madstudios.com/Reviews",
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
                    "review": {
                        "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a66",
                        "rating" : "5",
                        "review" : "Sample Message",
                        "person_id" : "0bdff6e0-e08c-11e3-8b68-0800200c9a56",
                        "location_id" : "0bdff6e0-e08c-11e3-8b68-0800200c9a56",
                        "added": "1398311635",
                        "updated": "1398311635"
                    },
                    "review": {
                        "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a66",
                        "rating" : "5",
                        "review" : "Sample Message",
                        "person_id" : "0bdff6e0-e08c-11e3-8b68-0800200c9a56",
                        "location_id" : "0bdff6e0-e08c-11e3-8b68-0800200c9a56",
                        "added": "1398311635",
                        "updated": "1398311635"
                    },
                    "review": {
                        "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a66",
                        "rating" : "5",
                        "review" : "Sample Message",
                        "person_id" : "0bdff6e0-e08c-11e3-8b68-0800200c9a56",
                        "location_id" : "0bdff6e0-e08c-11e3-8b68-0800200c9a56",
                        "added": "1398311635",
                        "updated": "1398311635"
                    }
                }
                
            ]
        }
        
### Create a Review [POST]

+ Parameters
    + id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a66`) ...  VARCHAR(36) UUID
    + rating (required, int, `0adff6e0-e08c-11e3-8b68-0800200c9a66`) ...  VARCHAR(36) Numeric rating of location
    + review (required, string, `Sample Review`) ...  LONGTEXT Review Body
    + location_id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a66`) ...  VARCHAR(36) ID of location
    + person_id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a66`) ...  VARCHAR(36) ID of person submitting the review
    
+ Request (application/json)

        { 
            "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a66",
            "rating" : "5",
            "review" : "Sample Message",
            "person_id" : "0bdff6e0-e08c-11e3-8b68-0800200c9a56",
            "location_id" : "0bdff6e0-e08c-11e3-8b68-0800200c9a56"
        }

+ Response 201 (application/json)

        {
            "meta": {
                "runtime": 0.3459,
                "context": "http://api.madstudios.com/REviews",
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
                "review": {
                    "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a66",
                    "rating" : "5",
                    "review" : "Sample REview",
                    "person_id" : "0bdff6e0-e08c-11e3-8b68-0800200c9a56",
                    "location_id" : "0bdff6e0-e08c-11e3-8b68-0800200c9a56",
                    "added": "1398311635",
                    "updated": "1398311635"
                }
            }
        }


## Review [/Reviews/{id}]
### Update a Review [PUT]

+ Parameters

    + rating (required, int, `0adff6e0-e08c-11e3-8b68-0800200c9a66`) ...  VARCHAR(36) Numeric rating of location
    + review (required, string, `Sample Review`) ...  LONGTEXT Review Body

+ Request (application/json)

        {
            "rating": "8",
            "review": "Sample Updated Review"
        }

+ Response 201 (application/json)

        {
            "meta": {
                "runtime": 0.1937,
                "context": "http://api.madstudio.dev/Reviews/0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
                "review": {
                    "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a66",
                    "rating" : "5",
                    "review" : "Sample Updated Review",
                    "person_id" : "0bdff6e0-e08c-11e3-8b68-0800200c9a56",
                    "location_id" : "0bdff6e0-e08c-11e3-8b68-0800200c9a56",
                    "added": "1398311635",
                    "updated": "1398311635"
                }
            }
        }

### Remove a Review [DELETE]
Deletes a single review

+ Parameters
    + id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a64`) ... String `id` of the REview to perform action with.

+ Response 200 (application/json)
    
        {
            "meta": {
                "runtime": 0.6138,
                "context": "http://api.madstudios.com/Reviews/0adff6e0-e08c-11e3-8b68-0800200c9a64",
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
        
# Group Booking @TODO
Message related resources of the **MAD Studios API**

## Message Booking [/Booking]

### Create a Booking [POST]

+ Parameters
    + id (required, string, `0adff6e0-e08c-11e3-8b68-0800200c9a66`) ...  VARCHAR(36) UUID
    
+ Request (application/json)

        { 
            "id" : "0adff6e0-e08c-11e3-8b68-0800200c9a66"
        }

+ Response 201 (application/json)

        {
            "meta": {
                "runtime": 0.3459,
                "context": "http://api.madstudios.com/Messages",
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
                "booking": {
                    "id": "0adff6e0-e08c-11e3-8b68-0800200c9a66"
                    "added": "1398311635",
                    "updated": "1398311635"
                }
            }
        }

