import java.sql.*;

public class JdbcExample {
    public static void main(String[] args) {
        try {
            Class.forName("com.mysql.jdbc.Driver"); // Загрузка драйвера MySQL
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/database_name", "username", "password");
            Statement stmt = con.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT * FROM table_name");

            while (rs.next()) {
                // Обработка результатов запроса
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