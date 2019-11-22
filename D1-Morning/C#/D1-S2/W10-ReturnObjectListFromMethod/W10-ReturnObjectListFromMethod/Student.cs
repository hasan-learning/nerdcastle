using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace W10_ReturnObjectListFromMethod
{
    class Student
    {
        public Student(string name, string email)
        {
            Name = name;
            Email = email;
        }

        public Student()
        {
         
        }
        public string Name { get; set; }

        public string Email { get; set; }

        public string RegNo { get; set; }
    }
}
