<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <style>
        /* Add CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .left-side,
        .right-side {
            float: left;
            width: 48%;
            margin-right: 4%;
        }

        .right-side {
            margin-right: 0;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>{{ $cv->first_name }} {{ $cv->last_name }}</h1>
        <p>{{ $cv->email }}</p>
    </div>

    <div class="left-side">
        <h3>Contact</h3>
        <ul>
            <li>Phone: {{ $cv->phone }}</li>
            <li>Email: {{ $cv->email }}</li>
            <li>Address: {{ $cv->address }}</li>
        </ul>

        <h3>Education</h3>
        <ul>
            @foreach ($cv->educations as $education)
                <li>{{ $education->major }} at {{ $education->institution }}</li>
            @endforeach
        </ul>
    </div>

    <div class="right-side">
        <h3>Work Experience</h3>
        <ul>
            @foreach ($cv->experiences as $experience)
                <li>{{ $experience->job_title }} at {{ $experience->company_name }} ({{ $experience->start_date }} -
                    {{ $experience->end_date }})</li>
                <p>{{ $experience->job_description }}</p>
            @endforeach
        </ul>

        <h3>References</h3>
        <ul>
            @foreach ($cv->references as $reference)
                <li>{{ $reference->name }} - {{ $reference->job }} (Phone: {{ $reference->phone }}, Email:
                    {{ $reference->email }})</li>
            @endforeach
        </ul>
    </div>

    <div class="clear"></div>
</body>

</html>
