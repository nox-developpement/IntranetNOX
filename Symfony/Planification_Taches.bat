SCHTASKS /Create /RU t.besson /RP Chegfp95 /SC HOURLY /ST 08:00:00 /TN PDFParsing /TR C:\wamp\www\Symfony\scripts\pdfParsing.bat /RL HIGHEST

SCHTASKS /Create /RU t.besson /RP Chegfp95 /SC HOURLY /ST 08:00:00 /TN ListingKeywordsReferences /TR C:\wamp\www\Symfony\scripts\listingKeywordsReferences.bat /RL HIGHEST

SCHTASKS /Create /RU t.besson /RP Chegfp95 /SC DAILY /ST 08:00:00 /TN RecupUsers /TR C:\wamp\www\Symfony\scripts\recupUsers.bat /RL HIGHEST

SCHTASKS /Create /RU t.besson /RP Chegfp95 /SC DAILY /ST 08:00:00 /TN BDDDump /TR C:\wamp\www\Symfony\scripts\BDDDump.bat /RL HIGHEST

SCHTASKS /Create /RU t.besson /RP Chegfp95 /SC DAILY /ST 08:00:00 /TN AccueilRandomImage /TR C:\wamp\www\Symfony\scripts\AccueilRandomImage.bat /RL HIGHEST