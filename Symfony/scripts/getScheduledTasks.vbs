' Récupération des arguments du script.
Set inputArguments = WScript.Arguments

' Récupération du nom de la tache planifiée à rechercher.
Dim scheduledTaskName
scheduledTaskName = inputArguments(0)

' Récupération du service des tâches planifiées.
Set service = CreateObject("Schedule.Service") 
call service.Connect()

' Récupération du dossier racine des tâches planifiées.
Dim rootFolder
Set rootFolder = service.GetFolder("\")

' Récupération des tâches planifiées.
Dim taskCollection 
Set taskCollection = rootFolder.GetTasks(0)

' Récupération du nombre de tâches planifiées.
Dim numberOfTasks
numberOfTasks = taskCollection.Count

' Initialisation d'une variable d'itération.
Dim tasksIterator
tasksIterator = 1

' Variable indiquant si la tâche a été trouvé (faux par défaut).
Dim taskFound
taskFound = false

' Tant que le nom de tache passé en paramètre est différent de la tache courante...
While taskFound = false And tasksIterator <= numberOfTasks
	' Si le nom de tâche passé en paramètre est identique au nom de la tache courante...
	if StrComp(scheduledTaskName, taskCollection(tasksIterator).Name) = 0 Then
		taskFound = true ' On indique que la tache a été trouvée.
	Else
		tasksIterator = tasksIterator + 1 ' On incrémente la variable d'itération.
	End If
Wend

' Si la tache a été trouvée...
Dim result(2) 'On initalise un tableau de taille 2.

If taskFound Then
	result(0) = taskCollection(tasksIterator).LastRunTime 'On ajoute la date de la dernière éxecution au tableau.
	result(1) = taskCollection(tasksIterator).NextRunTime 'On ajoute la date de la prochaine éxecution au tableau.
	result(2) = taskCollection(tasksIterator).LastTaskResult ' On ajoute la résultat de la dernière execution au tableau.
	'WScript.Echo taskCollection(tasksIterator).LastRunTime ' On écris la date de la dernière exécution.
	WScript.Echo Join( result, vbCrLf ) 'On retourne le tableau.
Else 
	WScript.Echo false
End If