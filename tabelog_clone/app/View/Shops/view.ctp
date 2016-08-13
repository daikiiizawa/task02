<div style="width: 100%; height: 80px;">
    <span style="float: left;"><h2><?= $shop['Shop']['name']; ?></h2></span>
    <span style="float: right;"><h3><?= $shop['Shop']['tel']; ?></h3></span>
</div>

<div>
    <span>店舗情報</span>
    <table>
        <tbody>
        <tr>
            <td style="width: 25%;">店名</td>
            <td style="width: 75%;"><?= $shop['Shop']['name']; ?></td>
        </tr>
        <tr>
            <td>TEL・予約</td>
            <td><?= $shop['Shop']['tel']; ?></td>
        </tr>
        <tr>
            <td>住所</td>
            <td><?= $shop['Shop']['addr']; ?></td>
        </tr>
        <tr>
            <td>ホームページ</td>
            <td><?= $shop['Shop']['url']; ?></td>
        </tr>
        </tbody>
    </table>
</div>