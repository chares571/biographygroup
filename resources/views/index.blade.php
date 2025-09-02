<x-layout title="Biographies">
    <table class="bio-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="num">1</td>
                <td>Chares Clare P. Balungo</td>
                <td><a href="{{ url('/biography/chares') }}" class="btn">View</a></td>
            </tr>
            <tr>
                <td class="num">2</td>
                <td>Jennifer S. Fajardo</td>
                <td><a href="{{ url('/biography/jennifer') }}" class="btn">View</a></td>
            </tr>
            <tr>
                <td class="num">3</td>
                <td>Ciara Wilsen C. Laranang</td>
                <td><a href="{{ url('/biography/ciara') }}" class="btn">View</a></td>
            </tr>
            <tr>
                <td class="num">4</td>
                <td>Diana Sofia L. Sta. Ana</td>
                <td><a href="{{ url('/biography/diana') }}" class="btn">View</a></td>
            </tr>
        </tbody>
    </table>
</x-layout>
