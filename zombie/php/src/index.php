<!DOCTYPE html>
<html>
<head>
    <title>Grievance form</title>
    <meta charset="UTF-8">
   
</head>
<body>
    <h1>Grievance form</h1>

    <form action="process-form.php" method="post">
    <label for="name">Name</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="prn">PRN</label>
        <input type="text" id="prn" name="prn"><br><br>
        
        <label for="body">Message</label>
        <textarea id="body" name="body"></textarea><br><br>

        <label for="priority">Priority</label>
        <select id="priority" name="priority">
            <option value="1">Low</option>
            <option value="2" selected>Medium</option>
            <option value="3">High</option>
        </select>

        <fieldset>
            <legend>Type</legend>

            <label>
                <input type="radio" name="type" value="Camplaint" checked>
                Complaint
            </label>

            <br>

            <label>
                <input type="radio" name="type" value="Suggestion">
                Suggestion
            </label>

        </fieldset>

         

        <br>

        <button>Send</button>

    </form>

</body>
</html>