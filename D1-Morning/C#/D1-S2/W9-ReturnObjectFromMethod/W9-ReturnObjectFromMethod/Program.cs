using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W9_ReturnObjectFromMethod
{
    class Program
    {
        static void Main(string[] args)
        {
            Student aStudent = GetStudent();
        }

        public static Student GetStudent()
        {
            Student aStudent = new Student();
            aStudent.Name = "Latif";
            aStudent.Email = "latif@mailbd.com";
            aStudent.RegNo = "8363-736-12";
            return aStudent;
        }

    }
}
