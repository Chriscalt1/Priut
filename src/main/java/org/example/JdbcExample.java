package org.example;

import java.sql.*;

public class JdbcExample {
    public static void main(String[] args) {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/priut", "root", "Kjvnbr97#7-1");
            Statement stmt = con.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT * FROM animals");

            while (rs.next()) {
                String id = rs.getString("id");
                String name = rs.getString("name");
                // ...
            }
            rs.close();
            stmt.close();
            con.close();
        } catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
        }
    }
}