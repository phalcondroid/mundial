<table border="2">
    <thead>
        <tr>
            <th>
                País
            </th>
            <th>
                #
            </th>
            <th>
                País
            </th>
            <th>
                Arbitro
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($view["partidos"] as $partidos) :
        ?>
            <tr>
                <td>
                    <?php echo $partidos["e1"] ?>
                </td>
                <td>
                    Vs
                </td>
                <td>
                    <?php echo $partidos["e2"] ?>
                </td>
                <td>
                    <?php echo $partidos["arbitro"] ?>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
