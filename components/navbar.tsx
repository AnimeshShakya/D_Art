"use client"

import Link from "next/link"
import { Button } from "@/components/ui/button"
import { SignInButton, SignUpButton, UserButton, useUser } from "@clerk/nextjs"

export function Navbar() {
  const { isSignedIn } = useUser()

  return (
    <nav className="fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-6 py-4">
      <Link href="/" className="flex items-center space-x-2">
        <span className="text-2xl font-bold bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent">
          ChitraKar
        </span>
      </Link>
      
      <div className="flex items-center space-x-6">
        <Link href="/" className="text-sm text-gray-300 hover:text-white transition-colors">
          Home
        </Link>
        <Link href="/gallery" className="text-sm text-gray-300 hover:text-white transition-colors">
          Gallery
        </Link>
        <Link href="/cart" className="text-sm text-gray-300 hover:text-white transition-colors">
          Cart
        </Link>
      </div>

      <div className="flex items-center space-x-4">
        {!isSignedIn ? (
          <>
            <SignInButton mode="modal">
              <Button variant="ghost" className="text-sm text-gray-300 hover:text-white">
                Login
              </Button>
            </SignInButton>
            <SignUpButton mode="modal">
              <Button className="bg-white/10 text-sm text-white hover:bg-white/20 transition-colors">
                Sign Up
              </Button>
            </SignUpButton>
          </>
        ) : (
          <UserButton 
            afterSignOutUrl="/"
            appearance={{
              elements: {
                userButtonAvatarBox: "w-10 h-10"
              }
            }}
          />
        )}
      </div>
    </nav>
  )
}
