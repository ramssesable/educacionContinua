<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
        fieldset{
            margin: 0 auto;
            text-align: center;
            width: 500px;
            border-radius: .5em;
        }
        label {
            font-size: 0.875rem;
            color: #4d4d4d;
            text-align: center;
            display: block;
            font-weight: normal;
            line-height: 1.5;
            margin-bottom: 0;
        }

        select{
            border-radius: 0.3em;
            border: 2px solid #cccccc;
            padding: 0.2em;
            height: 25px;
            width: 300px;
            -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
               -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
                -ms-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
                 -o-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
                    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            -webkit-box-sizing: border-box;
               -moz-box-sizing: border-box;
                -ms-box-sizing: border-box;
                 -o-box-sizing: border-box; 
                    box-sizing: border-box;
            -webkit-transition: -webkit-box-shadow 0.45s, border-color 0.45s ease-in-out;
               -moz-transition:    -moz-box-shadow 0.45s, border-color 0.45s ease-in-out;
                -ms-transition:     -ms-box-shadow 0.45s, border-color 0.45s ease-in-out;
                 -o-transition:      -o-box-shadow 0.45s, border-color 0.45s ease-in-out;
                    transition:         box-shadow 0.45s, border-color 0.45s ease-in-out;
        }

        .btn{
            display: inline-block;
            color: #fff;
            background: #428bca;
            border-color: #357ebd;
            font-size: 14px;
            cursor: pointer;
            padding: 3px 6px;
            border-radius: 4px;
            text-decoration: none;
            margin-right: 10px;
        }

        .btn:hover{
            background-color: #3276b1;
            border-color: #285e8e;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <label for="posgrado">Especialidad:</label>
            <select name="posgrado" id="posgrado">
                <option value="">-- Selecionada una Especialidad --</option>
                <option value="2">Especialidad en Endodoncia</option>
                <option value="3">Especialidad en Ortodoncia</option>
                <option value="4">Especialidad en Periodoncia</option>
                <option value="5">Especialidad en Prostodoncia</option>
            </select>
            <br>
            <input type="submit" class="btn" value="Aceptar">
        </fieldset>
    </form>
</body>
</html>