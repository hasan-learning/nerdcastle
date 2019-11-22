using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W14_OneToMany
{
    public class Student
    {
        public string RegNo { set; get; }
        public string Name { set; get; }
        public string Email { set; get; }

        public Student()
        { }

        public Student(string regNo, string name, string email)
        {
            RegNo = regNo;
            Name = name;
            Email = email;
        }
    }
}
