<!DOCTYPE html>
    <head>
            <title>Essential JS 2 Gantt</title>
            <!-- Essential JS 2 all material theme -->
            <link href="https://cdn.syncfusion.com/ej2/bootstrap4.css" rel="stylesheet" type="text/css"/>
            <!-- Essential JS 2 all script -->
            <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js" type="text/javascript"></script>
    </head>
    <body>
        <!-- Add the HTML <div> element for Gantt  -->
            <div id="Gantt"></div>
            <script type="text/javascript">
                var ganttChart = new ej.gantt.Gantt({
                    dataSource: [
                        {
                            TaskID: 1,
                            TaskName: 'Project Initiation',
                            StartDate: new Date('04/02/2019'),
                            EndDate: new Date('04/21/2019'),
                            subtasks: [
                                { TaskID: 2, TaskName: 'Identify Site location', StartDate: new Date('04/02/2019'), Duration: 4, Progress: 50 },
                                { TaskID: 3, TaskName: 'Perform Soil test', StartDate: new Date('04/02/2019'), Duration: 4, Progress: 50  },
                                { TaskID: 4, TaskName: 'Soil test approval', StartDate: new Date('04/02/2019'), Duration: 4, Progress: 50 },
                            ]
                        },
                        {
                            TaskID: 5,
                            TaskName: 'Project Estimation',
                            StartDate: new Date('04/02/2019'),
                            EndDate: new Date('04/21/2019'),
                            subtasks: [
                                { TaskID: 6, TaskName: 'Develop floor plan for estimation', StartDate: new Date('04/04/2019'), Duration: 3, Progress: 50 },
                                { TaskID: 7, TaskName: 'List materials', StartDate: new Date('04/04/2019'), Duration: 3, Progress: 50 },
                                { TaskID: 8, TaskName: 'Estimation approval', StartDate: new Date('04/04/2019'), Duration: 3, Progress: 50 }
                            ]
                        },
                    ],
                    height: '450px',
                    taskFields: {
                        id: 'TaskID',
                        name: 'TaskName',
                        startDate: 'StartDate',
                        duration: 'Duration',
                        progress: 'Progress',
                        dependency: 'Predecessor',
                        child: 'subtasks',
                    }
                });
                ganttChart.appendTo('#Gantt');
            </script>

    </body>
</html>