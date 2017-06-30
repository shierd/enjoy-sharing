<%@ page import="java.util.List" %><%--
  Created by IntelliJ IDEA.
  User: D
  Date: 2017/6/7
  Time: 17:34
  To change this template use File | Settings | File Templates.
--%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>
<head>
    <title>testHibernateList</title>
</head>
<body>
${employees[0].getId()}&nbsp;${employees[0].getFirstname()}&nbsp;${employees[0].getLastname()}&nbsp;${employees[0].getSalary()}<br />
${employees[1].getId()}&nbsp;${employees[1].getFirstname()}&nbsp;${employees[1].getLastname()}&nbsp;${employees[1].getSalary()}<br />
${employees[2].getId()}&nbsp;${employees[2].getFirstname()}&nbsp;${employees[2].getLastname()}&nbsp;${employees[2].getSalary()}
</body>
</html>
