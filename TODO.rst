.. contents:: Sections on this page
   :local:
   :depth: 1

----

.. _hiveeyes-ideas:

#####
Ideas
#####

As this is our brainstorming area, lots of content is in german, sorry.
You might want to try the `Google translation of the "Hiveeyes system documentation" tasks`_.

****
2016
****


2016-09-16
==========
- [o] Add "contact" page.


Misc
----
- https://www.siliconrepublic.com/innovation/new-tracking-device-developed-to-better-understand-bee-bee-haviour
- https://www.siliconrepublic.com/earth-science/ireland-saving-the-bees-plan-to-tackle-pollinator-decline
- https://www.pinterest.com/pin/407294360029073155/
- https://blog.adafruit.com/2016/05/24/open-source-beehives-incorporate-smart-citizen-platform-for-iot-hive-monitoring-iotuesday-citizenscience/


OSBH
----
- http://www.talkshopbot.com/forum/showthread.php?19354-Open-Source-Bee-Hives
- http://www.shareable.net/blog/will-open-source-beehives-solve-colony-collapse
- http://www.wedemain.fr/Peut-on-sauver-les-abeilles-grace-a-l-open-source_a389.html
- https://blog.arduino.cc/2014/03/19/support-open-source-beehives/
- http://www.open-electronics.org/saving-bees-in-open-source-interview-to-tristan-copley-smith-and-open-source-beehives-project/
- https://www.indiegogo.com/projects/open-source-beehives
- https://github.com/opensourcebeehives/
- http://www.heise.de/make/meldung/OSBH-Maker-retten-die-Bienen-2150227.html
- https://permies.com/t/34647/bees/critters/Open-Source-Beehives-Indiegogo-project
- https://boingboing.net/2014/03/10/crowdfunding-a-smart-open-sou.html
- http://permaculturenews.org/2014/03/19/open-source-beehives/
-


2016-09-14
==========
- http://forum.arduino.cc/index.php?topic=160450.0
- http://scientificbeekeeping.com/


2016-09-13
==========
- https://github.com/Hiverize/Sensorbeuten/pull/1
- https://github.com/hiveeyes/Hiverize-Sensorbeuten/blob/hiveeyes-backend/backend.rst


2016-09-05
==========
- Grafana export:

    - https://blog.mattionline.de/grafana-api-export-graph-as-png/
    - https://github.com/grafana/grafana/issues/2085

- Florian Altermatt (Schweiz)
- Add LICENSE badges to GitHub repositories


2016-09-03
==========
- Get early pictures from founding/designing phase, e.g. http://www.mauergarten.net/wp-content/uploads/IMG_5676.jpg

    - http://www.mauergarten.net/2014/09/5226/
    - http://www.mauergarten.net/2014/11/workshop-digitales-bienenmonitoring-ii/
    - https://imkerverein-kreuzberg.de/wordpress/?page_id=170&id=1



2016-06-12
==========
- http://karstenharazim.de/bienenmonitoring-hiveeyes-ping/
- https://www.facebook.com/photo.php?fbid=10206778412358616&set=pb.1224510416.-2207520000.1465756500.&type=3&theater


2016-06-08
==========
- [o] Add Homepage. More blueprints:

    - https://urbit.org/
    - https://mozilla.github.io/tofino/

- [o] Add more content from http://karstenharazim.de/bienenmonitoring-hiveeyes-ping/


2016-06-06
==========
- https://de-de.facebook.com/photo.php?fbid=10206766041769359&set=a.1682013409900.2083192.1224510416&type=1&theater
- Write documentation about Nginx configuration
- Make :ref:`daq-php` PHP4-compatible
- Investigate Software API of GPRSbee re. HTTP vs. FTP and
  single measurement vs. bulk upload in memory-constrained environments

    - http://gprsbee.com/
    - http://support.sodaq.com/gprsbee-connection/
    - https://github.com/SodaqMoja/GPRSbee



2016-06-05
==========
- | Rangefinder Beacon with a Smartphone
  | Buzzer, Beeper and GPS feedback for https://github.com/ksksue/Android-USB-Serial-Monitor-Lite
- Build distribution packages of artefacts in hiveeyes/arduino

    - Source tarball and zip
    - Binary firmware, debug and stripped
    - Documentation about how to acquire and how to upload firmware from different operating systems

        - ino
        - avrdude
        - Windows and Mac OSX GUI

- Refactor docs re. Handbook vs. Data acquisition vs. X


2016-06-04
==========
- Setup https://www.discourse.org/ on community.hiveeyes.org


2016-06-03
==========
- Add MQTT authentication based on https://github.com/jpmens/mosquitto-auth-plug ?
- "smskaufen.com" service plugin for mqttwarn
- "Signal" service plugin for mqttwarn

    - https://github.com/tgalal/python-axolotl
    - https://pypi.python.org/pypi/python-axolotl/
    - https://github.com/tgalal/yowsup

- Move from ATmega328P_ to ATmega644P_
- Build an apidictor with http://wiki.openmusiclabs.com/wiki/ArduinoFHT, see also:

    - http://www.elektronika.kvalitne.cz/ATMEL/necoteorie/transformation/AVRFHT/AVRFHT.html
    - http://wiki.openmusiclabs.com/wiki/ArduinoFFT


.. _raspberry-imst-ic880a-howto:

2016-06-02
==========
- Build a TTN/LoRaWAN Gateway with RaspberryPi and IMST iC880A

    - http://www.rs-online.com/designspark/electronics/eng/blog/building-a-raspberry-pi-powered-lorawan-gateway
    - Gonzalo Casas wrote a nice tutorial about it

        - https://github.com/ttn-zh/ic880a-gateway
        - https://thethingsnetwork.org/labs/story/how-to-build-your-own-lorawan-gateway/

- Link to OSCE

    - https://oscedays.org/berlin-2016/
    - http://community.oscedays.org/t/our-challenge-is-to-set-up-an-open-source-bee-monitoring-system-to-which-anyone-can-contribute-and-share-data-easily/4873

- Redirect https://swarm.hiveeyes.org/grafana/dashboard-solo/db/1-prototype-wip-amo to https://swarm.hiveeyes.org/grafana/dashboard/db/hiveeyes-labs-wedding
- Setup https://github.com/discourse/discourse on (community|forum.hiveeyes.org)


2016-06-01
==========
- | Beehive- and frame-tracking and inventory
  | https://www.i-keys.de/de/Transponder/125-khz.html
  | https://www.i-keys.de/de/Transponder/125-khz/EM4102-Uni/E675-1.58-Uni.html

- Link to https://www.facebook.com/StadtbienenOrg/posts/1238354899523194
- Integrate blossom times from DWD [msw]


2016-05-27
==========
- [o] https://github.com/search?q=hiveeyes&type=Issues


2016-05-26
==========
- [o] Improve liability disclaimer: Explicitly mention all "hardware"
  having the notion of implicitly being part of an overall "system".
- [o] Replace all "get in touch" or "please email us" links through
  http links to community.hiveeyes.org
- [o] Backlink with history.html#mqttwarn-xmpp
- [o] Add proper content attributions to media elements from 3rd-party authors
- [o] Display license in documentation
- [o] Add more "bills of material" (Teileliste)


2016-05-25
==========
- [o] Is it clear how to download, setup, configure and run BERadio_ yet?
- [o] Add pictures of hive locations, like
  https://www.facebook.com/photo.php?fbid=10204054704427620&set=pb.1224510416.-2207520000.1454976667.&type=3&theater
- [o] Write about technical specs in detail
- [o] Grafana's "dashboard-solo" should

    - display current datetime range
    - allow zooming out

- [o] Check https://packages.elmyra.de/hiveeyes/python/eggs/ at https://hiveeyes.org/docs/beradio/setup.html


2016-05-24
==========
- [o] Publish at hiveeyes.org/docs, redirect from swarm.hiveeyes.org
- [o] Add documentation license. https://creativecommons.org/licenses/by-sa/4.0/ ?
- [o] Send measurement values from the website
- [o] Provide a HTTP-based data sink
- [o] Write tutorial about how to actually get started with own hardware.
- [o] List some of the embedded components we build upon.
- [o] Describe the software interfaces in detail.
- [o] Refactor main index.rst
- [o] Add docs/why-hiveeyes
- [o] Add to docs: http://open-hive.org/apiary/index.html?user=clemens&hive=1
- [o] Add to docs: http://www.projektwerkstaetten.tu-berlin.de/menue/laufende_projektwerkstaetten_und_tu_projects/soziodiversitaet/


2016-05-23
==========
- [o] Schwarmalarm v1, HiveeyesDaily


2016-05-20 rpo, amo
===================
- [o] Use both raw and effective sensor values. Effective sensor values are modified by a specific delta.


2016-05-14 rpo, amo
===================
- [o] Add Homepage. Some blueprints:

* https://wordpress.com/
* https://www.cesanta.com/products/smart-js
* https://www.docker.com/products/docker-compose
* http://www.jyt.io/
* https://gortool.com/
* https://panopticon.re/
* http://opendesk.github.io/smartdesk/


2016-04-24
==========
- http://blog.durablescope.com/2015/03/build-speed-camera-and-traffic-logger.html
- https://github.com/tonbut/rpi-traffic-radar/blob/master/radar.pysmart


2016-03-06 amo
==============
- [x] Get proper trusted certificates from Let's Encrypt for hiveeyes.org
- [o] Improve docs

    - foundation (more pointers)
    - hiveeyes-one (more pointers)


2016-02-27 amo
==============
- [o] Consider using the upcoming Raspberry Pi 3 as a flexible and universal gateway


2016-02-25 rgu, cgr, rpo, msw, amo
==================================
- [o] BERadio Lua implementation for OpenWrt
- [o] Get Vagrant going for Windows users
- [o] Consider LoRaWAN
- [o] Rephrase wording on splash screen
- [o] How to do store-and-forward if Mosquitto doesn't have it? Use DTN finally?


2016-02-23 jho, rpo, amo
========================
- [o] Get into Mosquitto store-and-forward mechanism. Does it actually have it?
- [o] Check out improved "Annotations" feature of Grafana

    .. figure:: https://cloud.githubusercontent.com/assets/10999/13244830/928ab8a0-da09-11e5-8ce9-676ee55bcce8.gif
        :target: https://github.com/grafana/grafana/issues/1588
        :alt: Annotations: Click links and select text from annotation popover
        :width: 640px

        Annotations: Click links and select text from annotation popover

- [o] Setup Grafana HEAD from git repository at beta.hiveeyes.org for having a look at new features


2016-02-23 amo
==============
- [o] link to recent discussion about payload serialization formats


2016-02-22 rpo, amo
===================
- [o] Datenimport und -export über CSV
- [o] Tabellarische Daten über datatable_
- Naming things: Will *HiveFive* be a proper name for the convenience kit?


2016-02-22 cgr, amo
===================

Improvements
------------
- [o] Open Hive: Add Fritzing schema for ESP8266
- [o] Add Stückliste (via Excel file)
- [o] Improve documentation of HiveeyesOne_

    - Foundation libraries
    - Text from Grafana reference dashboard
    - Pictures


Features
--------
- [o] Kotori_ should be able to talk FTP (e.g. for batch-mode transmission of CSV data)

  .. todo:: Link to GPRS module capable of talking FTP

- [o] There should be a PHP script which is API-compatible to a future CoAP_ interface of Kotori_
  to smooth the learning curve and lower the bar.

  .. todo:: Research whether there already is a convenient PHP library talking CoAP_

- [o] This PHP script could also be used as a generic WebHook_ receiver
  when Kotori_ is dispatching messages to different receivers. mqttwarn_ might help.


2016-02-22 amo
==============
Documentation updates

- [o] Use the `"Group images" feature of sphinxcontrib-images`_ of the fine `sphinxcontrib-images`_ Sphinx_ module
- [o] Proper certificates for hiveeyes.org and ptrace.hiveeyes.org
- [o] Add topology 0.2.0 proposals from :ref:`Hiveeyes One Topology 0.2.0 proposal <topology-0.2.0-proposal-todo>`


2016-02-21 amo
==============
Documentation updates

- [x] Add stub "About Open Hive"
- [x] Write text about :ref:`HiveeyesOne`
- [x] Write text about :ref:`OpenHive`
- [x] Auf Kotori 0.3.2 and BERadio 0.4.4 CHANGELOG verlinken
- [x] rpos neue Bilder reintun
- [x] This and that
- [x] Tag swarm-hiveeyes-org @ 0.1.0
- [x] Add bumpversion
- [x] Improve Kotori_ and BERadio_ docs

    - [x] Migrate use-case scenarios from BERadio_
    - [x] Migrate Hiveeyes wishlist from Kotori_


2016-02-20 amo
==============

MS 1
----
- Kotori

    - Arbeit an der Dokumentation, siehe commits von gestern
    - Vorbereitung des Release 0.6.0 im aktuellen Zustand mit den Doku Updates (die 0.5.1 ist vom 26. November)
    - Release eines einigermaßen sauberen bzw. benutzbaren Debian Pakets

- BERadio

    - Arbeit an der Dokumentation
    - Vorbereitung des Release 0.5.0 im aktuellen Zustand mit den Doku Updates (die 0.4.4 ist vom 27. Oktober)
    - Release per Python source Paket (egg), wie gehabt

- swarm.hiveeyes.org

    - [x] Anlegen der Sphinx Doku, Bilder!
    - [x] Vollautomatisierung der Sphinx_ Doku Publikation als `Hiveeyes system documentation`_ auf ``swarm.hiveeyes.org``
    - [x] Erste Inhalte, Projekthistorie
    - [o] Ein paar einleitende Worte zum Gesamtprojekt in einer ``about.rst``
    - [x] Verlagerung der technischen Details vom derzeitigen Splashscreen der :ref:`Hiveeyes platform <Hiveeyes platform>`
      in die Sphinx_ Doku der `Hiveeyes system documentation`_
    - [o] Übertragung von rpos Inhalten aus `grafana_about.md`_ sowie `sensor_setup.md`_
      in die Sphinx_ Doku als reStructuredText_, Konvertierung per Pandoc_
    - [o] Halbautomatisierung der Rückkonvertierung von reStructuredText_ zu Markdown_ per Pandoc_
      zur Weiterverwendung innerhalb von Grafana_ Textpanels wie z.B. `Grafana dashboard "BER prototype #1"`_
    - [o] Die nach reStructuredText_ umgewandelten Inhalte aus `grafana_about.md`_ und `sensor_setup.md`_
      auch in die Sphinx Doku von BERadio_ und Kotori_ einbauen und/oder verlinken

.. _grafana_about.md: https://git.elmyra.de/hiveeyes/arduino-playground/blob/master/doc/grafana_about.md
.. _sensor_setup.md:  https://git.elmyra.de/hiveeyes/arduino-playground/blob/master/doc/sensor_setup.md


MS 2
----

.. tip:: Ab jetzt möglichst auch mit feature branches in den code repositories arbeiten.

.. _topology-0.2.0-proposal-todo:

- Kotori 0.7.0

    - Reguläres refactoring

    - MQTT Topic

        - Implementierung der "Content Type" Signalisierung über pseudo-Dateiendungen wie geplant
          (Inspired by Nick O’Leary and Jan-Piet Mens; Acked by cgr and rpo)::

                hiveeyes/testdrive/area-42/hive3/temperature vs. hiveeyes/testdrive/area-42/hive3.json

          Weitere Diskussion und Implementierung der "Direction" Signalisierung (Inspired by computourist, Pushed by rpo)
          Proposal::

                .../node3/{direction}/{sensor}.foo

        - Generalisierung der BERadioNetworkApplication / HiveeyesApplication vendor Architektur
        - Verbesserung der service-in-service Infrastruktur mit nativen Twisted service containern
        - Flexiblere Anwendungsfälle ähnlich dem von Hiveeyes ermöglichen: mqtt topic first-level segment "hiveeyes/"
          (the "realm") per Konfigurationsdatei bestimmen (Wunsch von Dazz)
        - Einführung von Softwaretests

- BERadio 0.6.0

    - Generalisierung der Funktionalität, Stichwort "mqttkit"
    - Verbesserung der Dokumentation

- swarm.hiveeyes.org

    - Prototypische Einbindung von mqttwarn_ in unser Gesamtsystem :-)



Research
--------
Mit ein paar Dingen müssen wir uns bei Gelegenheit stärker beschäftigen.

- InfluxDB

    - Wie geht man am besten mit InfluxDB-nativen Tags in unserem Kontext um?
      Bemerkung: Vielleicht war die Trennung auf Datenbank/Tableebene die falsche Strategie
      bzw. es gibt noch weitere, die orthogonal davon zusätzlich oder alternativ sinnvoll sind.

- Grafana

    - Wie kann man hier die Tags aus InfluxDB am besten verarbeiten und in den Dashboards praktisch nutzen?
    - Wie funktionieren Annotations mit InfluxDB?

- Gesamtsystem

    - Auch hier wird im Zusammenspiel der Komponenten noch viel geschwummst werden müssen.
      Ausblick: mqttwarn_ besser mit Kotori integrieren (via API)
      und als universeller Nachrichtenvermittler auf ``swarm.hiveeyes.org`` betreiben.


2016-02-15 amo
==============

Audio analysis
--------------
- https://academo.org/demos/spectrum-analyzer/
- https://github.com/borismus/spectrogram
- https://news.ycombinator.com/item?id=11033290



2016-02-12 rpo, amo
===================

Platform
--------
- Zuordnung/Verdrahtung von Sensoren zu Hardware Ports zu measurement fields zu Grafana dashboard/panel [rpo]

    - Beschäftigung mit InfluxDB Tags und deren Benutzung in Grafana

- Implement Grafana dashboard history - we already lost some... ;[

    | 22:33 die strategie mit dem git finde ich gut: https://wikitech.wikimedia.org/wiki/Grafana.wikimedia.org#No_history_of_dashboard_changes
    | 22:33 "One could run grafcli or something using the grafana HTTP API with git in a cron to have a better history."
- hiveeyes reference dashboard text
- Check backup of elbanco
- Issue PR2 of mqttwarn, write documentation (scenario window control)
- Obfuscate email address at https://swarm.hiveeyes.org/
- Improve splash page

    - http://bulma.io/
    - http://www.carrois.com/fira-4-1/
    - http://mozilla.github.io/Fira/
    - https://github.com/mozilla/Fira

- Redesign topic namespace
- Improve documentation

    - Interlink with documentation of foundation projects
    - Write about the integration of the components
    - Add Hardware Stückliste
    - Add more information fragments from distilled mailing list exchange

- Package pinning for Grafana
- Document how to upload pictures and screenshots, which should not go into a repository::

    # manual
    scp ~/Backup/Desktop/2016-02-19/2016-02-12_hiveeyes-notification-xmpp.jpg root@ptrace.hiveeyes.org:/var/www/ptrace.hiveeyes.org/htdocs/

    # automatic
    make ptrace-hiveeyes source=/tmp/grafana-ber-prototype-1.jpeg


BERadio
-------
- Add SMILE_ and UBJSON_ to `BERadio serialization format comparison <https://hiveeyes.org/docs/beradio/test/comparison.html>`_

    - https://en.wikipedia.org/wiki/Smile_%28data_interchange_format%29
    - https://en.wikipedia.org/wiki/UBJSON
    - http://ubjson.org/
    - via: http://johan.kanflo.com/serializing-data-from-iot-nodes/

- Improve formatting: https://hiveeyes.org/docs/beradio/research/binary-sizes.html
- Add computourist and others: https://hiveeyes.org/docs/beradio/research/prior-art.html
- Work on https://git.elmyra.de/hiveeyes/beradio/blob/master/src/cpp/examples/simple_message.cpp

- Add SenML_ serialization
    - http://wiki.1248.io/doku.php?id=senml
    - https://github.com/fluffy/senml-spec
    - https://tools.ietf.org/html/draft-jennings-senml-08
    - https://datatracker.ietf.org/doc/draft-jennings-core-senml/
    - via: http://www.earth.org.uk/note-on-IoT-comms-backhaul.html
    - via: http://opentrv.org.uk/


Kotori
------
- Add more protocols

    - CoAP
    - CSV over UDP
    - HTTP/REST

        - CSV
        - Single values via x-www-form-urlencoded
        - Bunch of JSON

- Add software tests
- Log file rotation for ``/var/log/kotori/kotori.log``

::

    2016-02-15T10:13:50+0100 [kotori.daq.storage.influx        ] INFO: Storing measurement succeeded: {'fields': {u'RSSI1': -67.0, u'wght1': -631.0, u'time': 1.455527630507804e+18}, 'measurement': '3756782252718325761_1'}
    2016-02-15T10:13:50+0100 [mqtt.client.subscriber           ] DEBUG: ==> PUBLISH (id=None qos=0 dup=False retain=False)
    2016-02-15T10:13:50+0100 [kotori.daq.application.beradio   ] DEBUG: MQTT receive: topic=hiveeyes/25a0e5df-9517-405b-ab14-cb5b514ac9e8/3756782252718325761/1/message-beradio, payload=d1:_2:h11:#i1e1:wi-631e1:ri-67ee
    2016-02-15T12:48:38+0100 [mqtt.client.factory.MQTTFactory  ] INFO: Stopping factory <mqtt.client.factory.MQTTFactory instance at 0x7f347c5b9a28>



*************
2015 December
*************

Platform
========

Prio 1
------
- [x] Close sensitive ports
- [x] Backupninja_ handler for InfluxDB_
- [x] Run with non-admin Grafana_ account
- [x] Make system reboot-safe
- [o] Run with non-admin InfluxDB_ account

Prio 2
------
- [x] map domains
- [x] change url in BERadio_
- [x] make application/index
- [x] enhance 04-hiveeyes
- [o] graph-screenshot for splash screen
- [o] setup packages.hiveeyes.org
- [o] Makefile deb: replace "build/virt" by variable
- [o] Publish more user documentation

    - [o] Sending field names with underscore prefixes
    - [o] Sending timestamps
- [x] Republish / link to more technical information from BERadio_ and Kotori_


Software
========
- [o] Send measurements via Javascript from https://swarm.hiveeyes.org/
- [o] Extract essential boilerplate code from BERadio_ and publish as mqttkit_
- [o] Publish Kotori_ repository


*************
2015 November
*************

2015-11-06 rpo, amo
===================

.. _hiveeyes-one-wishlist:

Wishlist
--------
- Aggregate measurements over time ranges (e.g. daily) and republish summary to MQTT

    - Provide reasonable "delta" values in relation to the point of last summary
    - Proposal for summary topics: hiveeyes/username/summary/foo/daily/bar
    - Schedule at: Morning, Noon, Evening

- Threshold alerting
- :ref:`weather-information-publishing`
- "Stockkarte" subsystem

    - marking point in graphs and filling the Stockkarte questioning
    - https://github.com/Dieterbe/anthracite/
    - https://twitter.github.io/labella.js/

- Timeseries anomaly detection using machine learning


----

.. _hiveeyes-todo:

####
Todo
####

List of collected ``.. todo::`` admonitions:

.. todoList::
