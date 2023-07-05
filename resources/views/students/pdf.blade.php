
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color: #ffffff; padding: 8px;">
    <div style="display: flex; align-items: center; margin-bottom: 8px;">
        <img src="https://res.cloudinary.com/di2a8gjsq/image/upload/v1687184390/karologo_hg8smj.jpg" style="border-radius: 50%; width: 64px; height: 64px; margin-right: 8px;">
        <div>
            <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 4px;">Student Details</h1>
            <p style="font-size: 18px;">Name: {{ $student->name }}</p>
            <p style="font-size: 18px;">Grade: {{ $student->grade }}</p>
        </div>
    </div>

    <h2 style="font-size: 20px; font-weight: bold; margin-bottom: 8px;">Fee Payment Details</h2>
    <table style="width: 100%; border-collapse: collapse; border: 1px solid #000;">
        <thead>
            <tr style="background-color: #f3f4f6;">
                <th style="border: 1px solid #000; padding: 8px;">Term</th>
                <th style="border: 1px solid #000; padding: 8px;">Total Fee Paid</th>
                <th style="border: 1px solid #000; padding: 8px;">Balance</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($termBalances as $term => $balance)
                <tr>
                    <td style="border: 1px solid #000; padding: 8px;">{{ $term }}</td>
                    @if ($balance !== null)
                        <td style="border: 1px solid #000; padding: 8px;">{{ $student->fees()->where('term', $term)->sum('ammount') }}</td>
                        <td style="border: 1px solid #000; padding: 8px;">{{ $balance }}</td>
                    @else
                        <td style="border: 1px solid #000; padding: 8px;" colspan="2">No fee structure found for this term and grade.</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
