SCHTASKS /Create /RU "SRVM-INTRANET\Administrateur" /RP "Nox30intr&" /SC HOURLY /ST 08:00:00 /TN PDFParsing /TR %~d0\wamp\www\Symfony\scripts\pdfParsing.bat /RL HIGHEST

SCHTASKS /Create /RU "SRVM-INTRANET\Administrateur" /RP "Nox30intr&" /SC HOURLY /ST 08:00:00 /TN ListingKeywordsReferences /TR %~d0\wamp\www\Symfony\scripts\listingKeywordsReferences.bat /RL HIGHEST

SCHTASKS /Create /RU "SRVM-INTRANET\Administrateur" /RP "Nox30intr&" /SC HOURLY /ST 08:00:00 /TN GXDataUpdating /TR %~d0\wamp\www\Symfony\scripts\GXDataUpdating.bat /RL HIGHEST

SCHTASKS /Create /RU "SRVM-INTRANET\Administrateur" /RP "Nox30intr&" /SC HOURLY /ST 08:00:00 /TN GXAffairesUpdating /TR %~d0\wamp\www\Symfony\scripts\GXAffairesUpdating.bat /RL HIGHEST

SCHTASKS /Create /RU "SRVM-INTRANET\Administrateur" /RP "Nox30intr&" /SC HOURLY /ST 08:00:00 /TN RHHierarchieExtraction /TR %~d0\wamp\www\Symfony\scripts\RHHierarchieExtraction.bat /RL HIGHEST

SCHTASKS /Create /RU "SRVM-INTRANET\Administrateur" /RP "Nox30intr&" /SC DAILY /ST 08:00:00 /TN RecupUsers /TR %~d0\wamp\www\Symfony\scripts\recupUsers.bat /RL HIGHEST

SCHTASKS /Create /RU "SRVM-INTRANET\Administrateur" /RP "Nox30intr&" /SC DAILY /ST 22:00:00 /TN BDDDump /TR %~d0\wamp\www\Symfony\scripts\BDDDump.bat /RL HIGHEST

SCHTASKS /Create /RU "SRVM-INTRANET\Administrateur" /RP "Nox30intr&" /SC HOURLY /ST 08:00:00 /TN Hourly_BDD_Dump /TR %~d0\wamp\www\Symfony\scripts\hourly_BDD_Dump.bat /RL HIGHEST

SCHTASKS /Create /RU "SRVM-INTRANET\Administrateur" /RP "Nox30intr&" /SC DAILY /ST 08:00:00 /TN AccueilRandomImage /TR %~d0\wamp\www\Symfony\scripts\AccueilRandomImage.bat /RL HIGHEST

SCHTASKS /Create /RU "SRVM-INTRANET\Administrateur" /RP "Nox30intr&" /SC DAILY /ST 08:00:00 /TN DemandeMaterielRevival /TR %~d0\wamp\www\Symfony\scripts\demandeMaterielRevival.bat /RL HIGHEST

SCHTASKS /Create /RU "SRVM-INTRANET\Administrateur" /RP "Nox30intr&" /SC DAILY /ST 08:00:00 /TN CompetenceUpdateMailing /TR %~d0\wamp\www\Symfony\scripts\competenceUpdateMailing.bat /RL HIGHEST

SCHTASKS /Create /RU "SRVM-INTRANET\Administrateur" /RP "Nox30intr&" /SC HOURLY /ST 08:00:00 /TN ScriptsExecutionChecker /TR %~d0\wamp\www\Symfony\scripts\scriptsExecutionChecker.bat /RL HIGHEST
