<!DOCTYPE html>
<html>

<head>
    <title>HTML Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>


    <div class="main">
        <h1>Recherche du stage</h1>
        <h3 style="border: 30px;">entrer votre information</h3>

        <form action="">
            <label >
                Nom:
            </label>
            <input type="text" id="first" name="nom" 
                placeholder="Entrer le nom" required>

            <label >
                Prenom:
            </label>
            <input type="text" name="prenom" 
                placeholder="Entrer le prenom" required>
            
            <label >
                    Ville:
                </label>
                <input type="text" id="first" name="Ville" 
                    placeholder="Entrer la ville" required>

            <label >
                    Email:
                </label>
                <input type="text" id="first" name="email" 
                    placeholder="Entrer votre adresse@" required>
    
                <label >
                    Date de debut de stage:
                </label>
                <input type="date" id="first" name="date" >

                <label for="options">
                    Type de stage:
                </label>
                <select id="options" name="typeoptions">
                    <option value="PFE">Pfe</option>
                    <option value="stage d'ete">stage d'été</option>
                </select>
                       
                      <label >
                        Formation:
                    </label>
                    <input type="text" id="first" name="formation" 
                        placeholder="Entrer votre Formation" required>               

            <div class="wrap">
                <button type="submit">
                    Recherche
                </button>

</body>

</html>