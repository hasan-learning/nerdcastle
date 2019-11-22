using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W10_ReturnObjectListFromMethod
{
    class Program
    {
        static void Main(string[] args)
        {
            List<Student> studentList = GetAllStudent();
        }

        public static List<Student> GetAllStudent()
        {
            Student student1 = new Student();
            student1.Name = "Latif";
            student1.Email = "latif@mailbd.com";
            student1.RegNo = "8363-736-12";
            Student student2 = new Student("Salam", "s@mail.com");
            Student student3 = new Student("Zamil", "z@mail.com");
            List<Student> studentList = new List<Student>();
            studentList.Add(student1);
            studentList.Add(student2);
            studentList.Add(student3);
            return studentList;
        }

    }
}
