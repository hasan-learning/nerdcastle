using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W11_ObjectAsMethodParameter
{
    class Program
    {
        static void Main(string[] args)
        {
            Student aStudent = new Student();
            aStudent.Name = "Rana";
            aStudent.Email = "r@mail.com";
            Update(aStudent);
        }

        public static void Update(Student aStudent)
        {
            aStudent.Name = "Arif";
            aStudent.Email = "r@mail.com";
        }

    }
}
