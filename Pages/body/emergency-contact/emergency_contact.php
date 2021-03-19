
<div class="container report_page">
    <h2 class="report-title">Emergency Contact Report</h2>
    <form class="form-inline report_page-search">
        <input type="text" class="form-control" id="frg_search" placeholder="Search By Name">
        <button type="submit" class="btn btn-success">Search</button>
    </form>
    <table class="table table-dark table-striped table-responsive tbl__frg">
        <thead>
            <tr>
                <th scope="col">PLT</th>
                <th scope="col">Rank</th>
                <th scope="col">Full Name</th>
                <th scope="col">Contact Person Name</th>
                <th scope="col">Phone</th>
                <th scope="col"></th>
            </tr>
        <thead>
        <tbody>
            <tr>
                <td>HQ</td>
                <td>CPT</td>
                <td>John Doe</td>
                <td>Liza Park, I</td>
                <td>4589862563</td>
                <td><a href="update_contact.php?id=001" class="btn btn-info">Update Contact</a></td>
            </tr>
            <tr>
                <td>LQ</td>
                <td>CPT</td>
                <td>Bran Min</td>
                <td>Bran Henry, F</td>
                <td>6589874589</td>
                <td><a href="update_contact.php?id=001" class="btn btn-info">Update Contact</a></td>
            </tr>
        </tbody>
    </table>
</div>