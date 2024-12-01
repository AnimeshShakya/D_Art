import Link from "next/link"
import { Facebook, Twitter, Instagram, Youtube } from 'lucide-react'
import { Button } from "@/components/ui/button"

export function Footer() {
  const currentYear = new Date().getFullYear()

  return (
    <footer className="relative bg-black/90 backdrop-blur-xl">
      <div className="container mx-auto px-4 md:px-6 lg:px-8 max-w-7xl py-20">
        {/* Main footer content */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-16">
          {/* Logo */}
          <div className="lg:col-span-2">
            <Link href="/" className="inline-block mb-6">
              <span className="text-3xl font-bold bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent">
                pride
              </span>
            </Link>
            <p className="text-gray-400 max-w-sm">
              Say goodbye to interruptions and enjoy uninterrupted music streaming.
            </p>
          </div>

          {/* Quick links */}
          <div className="space-y-4">
            <h3 className="text-white font-semibold mb-6">Get Started</h3>
            <ul className="space-y-3">
              {['Download app', 'New releases', 'Original', 'Beta'].map((item) => (
                <li key={item}>
                  <Link href="#" className="text-gray-400 hover:text-white transition-colors">
                    {item}
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          <div className="space-y-4">
            <h3 className="text-white font-semibold mb-6">Account</h3>
            <ul className="space-y-3">
              {['Sign in', 'Platform', 'Support'].map((item) => (
                <li key={item}>
                  <Link href="#" className="text-gray-400 hover:text-white transition-colors">
                    {item}
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          <div className="space-y-4">
            <h3 className="text-white font-semibold mb-6">Pride</h3>
            <ul className="space-y-3">
              {['Features', 'Careers', 'Press'].map((item) => (
                <li key={item}>
                  <Link href="#" className="text-gray-400 hover:text-white transition-colors">
                    {item}
                  </Link>
                </li>
              ))}
            </ul>
            <Button className="w-full bg-[#D81B60] hover:bg-[#C2185B] text-white">
              Sign Up
            </Button>
          </div>
        </div>

        {/* Social links */}
        <div className="flex flex-wrap justify-center gap-6 mb-12">
          {[
            { icon: Facebook, label: 'Facebook' },
            { icon: Twitter, label: 'Twitter' },
            { icon: Instagram, label: 'Instagram' },
            { icon: Youtube, label: 'YouTube' },
          ].map(({ icon: Icon, label }) => (
            <Link
              key={label}
              href="#"
              className="text-gray-400 hover:text-white transition-colors"
              aria-label={label}
            >
              <Icon className="w-6 h-6" />
            </Link>
          ))}
        </div>

        {/* Bottom links */}
        <div className="border-t border-white/10 pt-8">
          <div className="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-400">
            <div className="flex flex-wrap justify-center gap-4">
              <Link href="#" className="hover:text-white transition-colors">
                Privacy policy
              </Link>
              <Link href="#" className="hover:text-white transition-colors">
                Cookie settings
              </Link>
              <Link href="#" className="hover:text-white transition-colors">
                Terms and conditions
              </Link>
            </div>
            <p> {currentYear} Pride. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
  )
}
